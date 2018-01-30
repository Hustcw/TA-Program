<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['signin']
        ]);
    }

    public function signin()
    {
        return view('signin');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials,$request->has('remember'))) {
            if(!$request->identity){//选择的学生端登陆
                session()->flash('success', '欢迎回来！');
                return redirect()->route('users.show', ['user'=>Auth::user()]);
            }elseif ($request->identity && Auth::user()->is_ta){//选择的助教端登陆且有助教身份
                session(['identity' => 1]);
                session()->flash('success', '欢迎回来！');
                return redirect()->route('users.show', [Auth::user()]);
            }else{//选择助教端登陆没有助教身份
                session()->flash('warning', '很抱歉，您还没有助教身份');
                return redirect()->back();
            }
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('/');
    }

}
