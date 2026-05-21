<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
     public function register(Request $request)
    {

        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        // Insert User
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

            'password' => Hash::make($request->password),

        ]);

        return redirect()->back()->with('success', 'Registration Successful');

    }



    public function login(Request $request)
{

    $credentials = $request->validate([

        'email' => 'required|email',
        'password' => 'required',

    ]);

    // LOGIN CHECK
    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        return redirect()->route('profile')
       ->with('success', 'Login Successful');
    }

    return back()->with('error', 'Invalid Email or Password');

}
}
