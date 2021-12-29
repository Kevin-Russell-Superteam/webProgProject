<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

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
        $Item = Item::all();
        return view('view', [
            'pageTitle' => "View Furniture",
            'items' => $Item
        ]);
    }
}

// Antara pake ItemController atau nanti bikin Guest Controller