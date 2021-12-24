<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            "pageTitle" => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:users', 'regex:/^[a-zA-Z\s]*$/'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:20'],
            'address' => ['required', 'min:5', 'max:95'],
            'gender' => ['required']
        ]);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful. Please login');

        return redirect('/login')->with('message', 'Registration successful!');
    }
}

// Full Name	Must be filled, unique and consist of letter and space only
// Email	Must be filled with email validation and unique
// Password	Must be filled and characters length must be between 5 and 20
// Address	Must be filled and characters length must be between 5 and 95
// Gender	Must be selected
// regex:/^[a-zA-Z\s]*$/