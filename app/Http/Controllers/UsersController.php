<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    //注册页面
    public function create(){
        return view('users/create');
    }

    //显示用户信息
    public function show(User $user){
        return view('users.show',compact('user'));
    }

    //验证并保存注册信息
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);  // 用户注册成功后自动登录
        session()->flash('success','欢迎，您将在这里开启一段新的旅程！');

        return redirect()->route('users.show',$user);
        // 上面这行代码相当于：redirect()->route('users.show', [$user->id]);
        //  因为route()方法会自动获取 Model 的主键，也就是数据表 users 的主键 id
    }
}
