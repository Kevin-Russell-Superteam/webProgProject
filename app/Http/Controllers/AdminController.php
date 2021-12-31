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
        $storeImage = $request->file('ItemImage');

        $ImageName = $storeImage->getClientOriginalName();
        Storage::putFileAs('public/images', $storeImage, $ImageName);
        $ImageName = 'images/' . $ImageName;

        $newItem = new Item();
        $newItem->name = $request->ItemName;
        $newItem->price = $request->ItemPrice;
        $newItem->type = $request->ItemType;
        $newItem->color = $request->ItemColor;
        $newItem->image = $ImageName;

        $newItem->save();

        return 'Furniture Succesfully Added!';
    }

    public function search(Request $request)
    {
        $item = Item::where('name', 'like', '%' . $request->searchQuery . '%')->get();
        return view('admin.view', [
            "pageTitle" => "View Furniture",
            "items" => $item
        ]);
    }

    public function itemDetail(Item $item)
    {
        return view('admin.detail', [
            "pageTitle" => $item->name,
            "item" => $item
        ]);
    }
}
