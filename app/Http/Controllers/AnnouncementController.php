<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcement = Announcement::find(1); 

        return view('admin.announcement.index', compact('announcement')); 
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);
        
        $request->validate([
            'announcement' => 'required|string', 
        ]);

        $announcement->announcement = $request->announcement;
        $announcement->save();

        return redirect()->route('admin.announcement')->with('success', 'Announcement updated successfully.');
    }
}
