<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function signup()
    {
        return view('signup');
    }//显示注册页面

    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6|max:16'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>bcrypt($request->password)
        ]);

        session()->flash('success',"注册成功，欢迎您！");
        return redirect('/');
    }

    public function show(User $user)
    {
        if($user->is_ta) return view('tahome',compact('user'));
        return view('sthome',compact('user'));
    }
}
