<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;

class GuestController extends Controller
{
    public function index()
    {
        return view('guesthome', [
            'pageTitle' => "Home",
            'items' => Item::paginate(4)
        ]);
    }

    public function view()
    {
        return view('view', [
            'pageTitle' => "View Furniture",
            'items' => Item::paginate(4)
        ]);
    }
}

// Antara pake ItemController atau nanti bikin Guest Controller