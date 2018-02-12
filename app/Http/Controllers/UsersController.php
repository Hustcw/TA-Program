<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

use Rainwsy\Aliyunmail\Send\Single;
use Auth;
use phpCAS;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'except'=>['create','store','confirmEmail']
        ]);

        $this->middleware('guest',[
           'only'=>['create']
        ]);
    }


    public function create()
    {
        return view('signup');
    }//显示注册页面

    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6|max:16',
            'captcha' => 'required|captcha',
        ], [
        'captcha.required' => '验证码不能为空',
        'captcha.captcha' => '请输入正确的验证码',
    ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>bcrypt($request->password)
        ]);

        $this->sendEmailConfirmationTo($user);
        session()->flash('success', '验证邮件已发送到你的注册邮箱上，请注意查收。');
        return redirect('/');
    }

    public function show(User $user)
    {
        $this->authorize('verify',$user);
        $courses=$user->courses()->paginate();
        if($user->is_ta && session('identity')) return view('users.tahome',compact('user'));
        return view('users.sthome',compact('user','courses'));
    }

    public function edit(User $user)
    {
        $this->authorize('verify',$user);
        return view('users.info',compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'username' => 'nullable|max:50',
            'password' => 'nullable|confirmed|min:6'
        ]);

        $this->authorize('verify',$user);
        $data = [];
        if($request->username) {
            $data['username'] = $request->username;
        }
        if($request->phonenumber){
            $data['phonenumber'] = $request->phonenumber;
        }
        if ($request->former_password) {
            if (Auth::attempt(['email' =>$user->email , 'password' => $request->former_password])) {
                $data['password'] = bcrypt($request->password);
            }
            else{
                session()->flash('warning','原密码输入错误！');
                return redirect()->back();
            }
        }

        $user->update($data);
        session()->flash('info', '个人资料更新成功！');

        return redirect()->back();
    }

    protected function sendEmailConfirmationTo($user)
    {
        $view = 'emails.confirm';
        $data = compact('user');
        $from = '17718159699@163.com';
        $name = 'USTC-TA';
        $to = $user->email;
        $subject = "USTC-TA——请确认你的邮箱。";

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();
        $user->activated = true;
        $user->activation_token = null;
        $user->save();
        Auth::login($user);
        session()->flash('success', '恭喜你，激活成功！');
        return redirect()->route('users.show', ['user'=>$user]);
    }

}
