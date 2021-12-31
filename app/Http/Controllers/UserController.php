<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            "pageTitle" => "Home",
            'items' => Item::paginate(4)
        ]);
    }

    public function view()
    {
        return view('user.view', [
            "pageTitle" => "View Furniture",
            'items' => Item::paginate(4)
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            "pageTitle" => "Profile"
        ]);
    }

    public function updateProfilePage()
    {
        return view('user.updateProfile', [
            "pageTitle" => "Update Profile"
        ]);
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;

        $user = User::find($id);

        Validator::make($request->all(), [
            'name' => ['required', 'regex:/^[a-zA-Z\s]*$/', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'email:dns', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'min:5', 'max:20'],
            'address' => ['required', 'min:5', 'max:95'],
            'gender' => ['required']
        ])->validate();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->gender = $request->gender;

        $user->password = Hash::make($user->password);

        $user->save();

        return redirect('/user/profile')->with('updateMessage', 'Your data has been updated!');
    }

    public function search(Request $request)
    {
        $item = Item::where('name', 'like', '%' . $request->searchQuery . '%')->get();
        return view('user.view', [
            "pageTitle" => "View Furniture",
            "items" => $item
        ]);
    }

    public function itemDetail(Item $item)
    {
        return view('user.detail', [
            "pageTitle" => $item->name,
            "item" => $item
        ]);
    }
}
