<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            $user = Auth::user();
            $role = $user->role;

            // Redirect based on role
            switch ($role) {
                case 'prof':
                    return redirect()->route('prof.dashboard');
                case 'coord':
                    return redirect()->route('coord.dashboard');
                case 'chef_dept':
                    return redirect()->route('chef_dept.dashboard');
                case 'student':
                    return redirect()->route('student.dashboard');
                default:
                    Auth::logout();
                    return redirect()->back()->withErrors(['role' => 'Invalid role'])->withInput();
            }
        }
             else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }

    /**
     * Handle the logout request.
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout successful');
    }
}