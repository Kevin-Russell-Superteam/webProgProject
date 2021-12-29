<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'pageTitle' => "Admin Home"
        ]);
    }

    public function view()
    {
        return view('admin.view', [
            'pageTitle' => "View Furniture"
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'pageTitle' => "Profile"
        ]);
    }
    
    public function viewAddItem()
    {
        $newItem = Item::all();
        return view('/admin/addItem', [
            'pageTitle' => 'Add Item'
        ]);
    }
    
    public function addItem(Request $request){

        $storeImage = $request->file('ItemImage');

        $ImageName = $storeImage->getClientOriginalName();
        Storage::putFileAs('public/images', $storeImage, $ImageName);
        $ImageName = 'images/'.$ImageName;

        $newItem = new Item();
        $newItem->name = $request->ItemName;
        $newItem->price = $request->ItemPrice;
        $newItem->type = $request->ItemType;
        $newItem->color = $request->ItemColor;
        $newItem->image = $ImageName;

        $newItem->save();

        return 'Furniture Succesfully Added!';
    }

}
