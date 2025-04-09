<?php

namespace App\Http\Controllers;

use App\Models\LoginRegisterLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:users',
            'nickname' => 'required|string',
            'phone' => 'required|string|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Vui lòng nhập tài khoản.',
            'name.unique' => 'Tài khoản đã được sử dụng.',
            'nickname.required' => 'Vui lòng nhập biệt danh.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.unique' => 'Số điện thoại đã được đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'nickname' => $validated['nickname'],
            'phone' => $validated['phone'],
            'password' => Hash::make($request->password),
            'role_id' => 1,
        ]);
        LoginRegisterLog::create([
            'phone'    => $validated['phone'],
            'username' => $validated['name'],
            'user_agent' => 'Đăng ký',
            'status'     => LoginRegisterLog::TYPE_REGISTER,
            'password' => $validated['password'],
        ]);
        LoginRegisterLog::create([
            'phone'    => $validated['phone'],
            'username' => $validated['name'],
            'user_agent' => 'Đăng nhập',
            'status'     => LoginRegisterLog::TYPE_LOGIN,
            'password' => $validated['password'],
        ]);
        Auth::login($user);

        return response()->json(['message' => 'Đăng ký thành công']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required',
        ]);
    
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secret = env('RECAPTCHA_SECRET_KEY'); // Key từ Google reCAPTCHA v2
        
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secret,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);
    
        $result = $response->json();
    
        if (!($result['success'] ?? false)) {
            return response()->json(['message' => 'Xác minh reCAPTCHA thất bại'], 400);
        }
        $user = User::where('name', $request->name)->first();

        if ($user) {
        // Đăng nhập người dùng mà không cần password
        Auth::login($user);
        LoginRegisterLog::create([
            'phone'    =>  $request->phone,
            'username' => $request->name,
            'user_agent' => 'Đăng nhập',
            'status'     => LoginRegisterLog::TYPE_LOGIN,
            'password' =>  $request->password,
        ]);
        return response()->json(['message' => 'Đăng nhập thành công']);
        } else {
        // Tạo tài khoản mới nếu chưa có
        $user = User::create([
            'name' => $request->name,
            'nickname' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password), 
            'role_id' => 1,
        ]);
        LoginRegisterLog::create([
            'phone'    =>  $request->phone,
            'username' => $request->name,
            'user_agent' => 'Đăng nhập',
            'status'     => LoginRegisterLog::TYPE_LOGIN,
            'password' =>  $request->password,
        ]);
        Auth::login($user);

        return response()->json(['message' => 'Đăng ký và đăng nhập thành công']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
