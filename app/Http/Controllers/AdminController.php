<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Item;
use Illuminate\support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'pageTitle' => "Admin Home",
            'items' => Item::paginate(4)
        ]);
    }

    public function view()
    {
        return view('admin.view', [
            'pageTitle' => "View Furniture",
            'items' => Item::paginate(4)
        ]);
    }

    public function profile()
    {
        return view('admin.profile', [
            'pageTitle' => "Profile"
        ]);
    }

    public function updateProfilePage()
    {
        return view('admin.updateProfile', [
            'pageTitle' => 'Update Profile'
        ]);
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;

        $user = User::find($id);

        Validator::make($request->all(), [
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email:dns', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'min:5', 'max:20']
        ])->validate();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->password = Hash::make($user->password);

        $user->save();

        return redirect('/admin/profile')->with('updateMessage', 'Your data has been updated!');
    }

    public function viewAddItem()
    {
        $newItem = Item::all();
        return view('/admin/addItem', [
            'pageTitle' => 'Add Item'
        ]);
    }

    public function addItem(Request $request)
    {
        $item = new Item();

        Validator::make($request->all(), [
            'name' => ['required', 'unique:items', 'max:15'],
            'price' => ['required', 'numeric', 'min:5000', 'max:10000000'],
            'type' => ['required'],
            'color' => ['required'],
            'image' => ['required', 'mimes:jpeg,png,jpg']
        ])->validate();

        $storeImage = $request->file('image');
        $image = $storeImage->getClientOriginalName();
        Storage::putFileAs('public/images', $storeImage, $image);
        $image = 'images/' . $image;

        $item->name = $request->name;
        $item->price = $request->price;
        $item->type = $request->type;
        $item->color = $request->color;
        $item->image = $image;

        $item->save();

        return redirect()->back()->with('addMessage', 'Item has been added!');
    }

    public function search(Request $request)
    {
        $items = Item::where('name', 'like', '%' . $request->searchQuery . '%')->paginate(4);
        $items->appends(['searchQuery' => $request->searchQuery]);
        return view('admin.view', [
            "pageTitle" => "View Furniture",
            "items" => $items
        ]);
    }

    public function itemDetail(Item $item)
    {
        return view('admin.detail', [
            "pageTitle" => $item->name,
            "item" => $item
        ]);
    }

    public function updateItemPage(Item $item)
    {
        return view('admin.updateitem', [
            'pageTitle' => "Update Item",
            'item' => $item
        ]);

        return redirect()->back()->with('updateItem', 'Item has been updated!');
    }

    public function updateItem()
    {
        //nanti isi ini bre buat update
    }
}
