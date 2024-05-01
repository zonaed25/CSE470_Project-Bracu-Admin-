<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 

        return view('admin.blog.index', compact('blogs')); 
    }

    public function studentView()
    {
        $blogs = Blog::all(); 

        return view('student.blog', compact('blogs')); 
    }
    public function viewBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('student.blog-view', compact('blog'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $rand = rand(11,99);

        $filename=$rand . time() . '.jpg';
        $request->image->move(public_path('/images/blogs') , $filename);

        Blog::create([
            'image' => $filename,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'New blog added successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }
}
