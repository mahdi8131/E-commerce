<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function loginPage()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $email    = $request->email;
        $password = $request->password;

        if (! Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        return redirect()->route('page.dashboard');
    }
}
