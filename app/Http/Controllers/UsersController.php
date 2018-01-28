<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function create()
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
        $courses=$user->courses()->paginate();
        if($user->is_ta) return view('users.tahome',compact('user','courses'));
        return view('users.sthome',compact('user','courses'));
    }

    public function edit(User $user)
    {
        return view('users.info',compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'username' => 'nullable|max:50',
            'password' => 'nullable|confirmed|min:6'
        ]);

        $data = [];
        if($request->username) {
            $data['username'] = $request->username;
        }
        if($request->phonenumber){
            $data['phonenumber'] = $request->phonenumber;
        }
        if ($request->password) {
            if (Auth::once(['email' =>$request->email , 'password' => $request->former_password])) {
                $data['password'] = bcrypt($request->password);
            }
        }

        $user->update($data);

        session()->flash('success', '个人资料更新成功！');

        return redirect()->route('users.show', $user->id);
    }
}
