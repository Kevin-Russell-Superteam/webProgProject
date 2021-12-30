<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function updatePage()
    {
        return view('admin.update', [
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
}
