<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            "pageTitle" => "Home"
        ]);
    }

    public function view()
    {
        return view('user.view', [
            "pageTitle" => "View Furniture"
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            "pageTitle" => "Profile"
        ]);
    }
}
