<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        return view('admin.payment.index', compact('payments')); 
    }
    public function studentView()
    {
        $userId = Auth::id();
    
        $payments = Payment::where('user_id', $userId)->get(); 
        
        return view('student.payment', compact('payments')); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'transaction_id' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);


        $payment = new Payment();
        $payment->user_id = auth()->id();
        $payment->fee_name = $request->title;
        $payment->tr_id = $request->transaction_id;
        $payment->fee = $request->amount;
        $payment->save();

        return redirect()->back()->with('success', 'Payment submitted successfully.');
    }
}
