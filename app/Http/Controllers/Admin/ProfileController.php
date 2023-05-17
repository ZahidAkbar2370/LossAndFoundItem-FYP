<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('Admin.Profile.profile');
    }

    public function update(Request $request)
    {
        $updateProfile = User::find(1);
        $updateProfile->name = $request->name;
        $updateProfile->update();

        Session::flash("message", "Profile Updated Successfully!");
        return redirect("admin/profile");
    }

    public function updatePassword(Request $request)
    {
        $updatePassword = User::find(1);


        $updatePassword->password = Hash::make($request->password);
        $updatePassword->update();
    }
}
