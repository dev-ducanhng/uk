<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class GeetestController extends Controller
{
    public function initCaptcha(Request $request)
    {
        $response = Http::get('https://gcaptcha4.geetest.com/register', [
            'captcha_id'   => env('GEETEST_ID'),
            'client_type'  => 'web',
            'ip_address'   => $request->ip(),
        ]);

        $challenge = $response->body();

        Session::put('geetest_challenge', $challenge); // Bạn có thể không cần lưu nếu không dùng tới

        return response()->json([
            'captcha_id' => env('GEETEST_ID'),
            'challenge'  => $challenge,
        ]);
    }

    public function verify(Request $request)
    {
        $data = $request->validate([
            'lot_number'     => 'required',
            'captcha_output' => 'required',
            'pass_token'     => 'required',
            'gen_time'       => 'required',
        ]);

        $response = Http::asForm()->post('https://gcaptcha4.geetest.com/validate', [
            'lot_number'     => $data['lot_number'],
            'captcha_output' => $data['captcha_output'],
            'pass_token'     => $data['pass_token'],
            'gen_time'       => $data['gen_time'],
            'captcha_id'     => env('GEETEST_ID'),
            'sign_token'     => env('GEETEST_KEY'),
        ]);

        $result = $response->json();

        if (!isset($result['result']) || $result['result'] !== 'success') {
            return response()->json(['success' => false, 'message' => 'CAPTCHA không hợp lệ'], 422);
        }

        return response()->json(['success' => true]);
    }
}