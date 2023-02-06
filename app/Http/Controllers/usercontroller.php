<?php

namespace App\Http\Controllers;

use App\Models\passport;
use Illuminate\Http\Request;
use App\Models\users;

class usercontroller extends Controller
{
    public function adduser(Request $request)
    {
        $data = $request->input();
        $user = new users();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();
        $pass = new passport();
        $pass->user_id = $user->id;
        $pass->passport_number = $data['pass_num'];
        $pass->save();
        return redirect('users')->with('status', "Insert successfully");
    }
    public function showusers()
    {
        $userdata = users::all();
        $passport = passport::all();
        return view('users', compact('userdata', 'passport'));
    }

    public function deleteuser($id)
    {
        $userdata = users::find($id);
        $userdata->delete();
        return redirect('users')->with('status', "Delete successfully");
    }

    public function deletepassport($id)
    {
        $passport = passport::find($id);
        $passport->delete();
        return redirect('users')->with('status', "Delete successfully");
    }

    public function edituser($id)
    {
        $user = users::find($id);
        return view('editusers', compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        $userdata = $request->input();
        $user = users::find($id);
        $user->name = $userdata['name'];
        $user->email = $userdata['email'];
        $user->save();
        return redirect('users')->with('status', "Delete successfully");
    }
    public function editpass($id)
    {
        $pass = passport::find($id);
        return view('editpass', compact('pass'));
    }

    public function updatepass(Request $request, $id)
    {
        $passdata = $request->input();
        $pass = passport::find($id);
        $pass->passport_number = $passdata['pass_num'];
        $pass->save();
        return redirect('users')->with('status', "update successfully");
    }
}
