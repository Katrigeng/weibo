<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //登录
    public function create(){
        return view('sessions/create');
    }

    //保存登录信息
    public function store(Request $request){
        $userInfo = $this->validate($request,[
            'email' => 'required|max:255|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($userInfo)){
            session()->flash('success','欢迎回来！');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','很抱歉，你的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    //退出登录
    public function destroy(){
        Auth::logout();
        session()->flash('success','您已成功退出！');
        return redirect('login');
    }
}
