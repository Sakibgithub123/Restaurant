<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function manageUser(){
        $user=User::all();
        return view('admin.user.manage-user',['users'=>$user]);
    }

    public function editUser($id){
        $edit=User::find($id);
        return view('admin.user.edituser',['user'=>$edit]);

    }
    public function updateUser(Request $request){
        User::updateUser($request);
        return back();
    }
}
