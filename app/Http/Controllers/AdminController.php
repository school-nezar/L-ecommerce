<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogout()
    {
        Auth::logout();

        return Redirect()->route('login');
    }


    public function UserProfile()
    {
        $adminData = User::find(Auth::user()->id);
        return view('backend.admin.admin_profile', compact('adminData'));
    } // end mehtod


    public function UserProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');

            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));

            // $file=avatar-1.png

            $filename = date('YmdHi').$file->getClientOriginalName();

            //$filename=26.3.2022.avatar-1

            $file->move(public_path('upload/admin_images'), $filename);

            $data['profile_photo_path'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('user.profile')->with($notification);
    }



    public function ChangePassword(){
        $adminData = User::find(Auth::user()->id);
        return view('backend.admin.change_password', compact('adminData'));
    }


public function UpdatePassword(Request $request){

    $validateData = $request->validate([
        'oldpassword' => 'required',
        'password' => 'required|confirmed'
    ]);

   
    $hashedPassword = User::find(Auth::user()->id)->password;

    if (Hash::check($request->oldpassword, $hashedPassword)) {
        
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();

        $notification = array(
            'message' => 'your password has Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('user.logout')->with($notification);


      
    }
    else{

        $notification = array(
            'message' => 'current password is not correct',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

       
    }

   

}

}
