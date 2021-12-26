<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guesthome', [
            'pageTitle' => "Home"
        ]);
    }

    public function view()
    {
        return view('view', [
            'pageTitle' => "View Furniture"
        ]);
    }
}

// Antara pake ItemController atau nanti bikin Guest Controller