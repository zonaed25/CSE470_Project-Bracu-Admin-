<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function showChangePassword()
    {
        return view('auth.changePassword');
    }

    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Log activity
        $this->logActivity(Auth::id(), 'user->change_password', "Password changed for user: $user->id");

        return redirect()->route('auth.changePassword')->with('success', 'Password changed successfully.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
    
            if ($user->role == 1) { 
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/student');
            }
        } else {
            return back()->with(['error' => 'The provided credentials do not match our records.']);
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
