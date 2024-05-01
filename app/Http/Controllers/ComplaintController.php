<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all(); 
        return view('admin.complaint.index', compact('complaints')); 
    }

    public function studentView()
    {
        $userId = Auth::id();
    
        $complaints = Complaint::where('user_id', $userId)->get(); 
        
        return view('student.complaint', compact('complaints')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'details' => 'required|string|max:255',
        ]);

        $complaint = new Complaint();
        $complaint->user_id = Auth::id(); 
        $complaint->complaint = $request->details;
        $complaint->status = 'pending';
        $complaint->save();

        return redirect()->back()->with('success', 'Complaint submitted successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->status = 'solved';
        $complaint->save();

        return response()->json(['message' => 'Status updated successfully']);
    }
}
