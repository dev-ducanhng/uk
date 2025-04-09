<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\LoginRegisterLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginSubmit(Request $request){
        $credentials = $request->only('name', 'password');
        $user = User::where('name', $request->name)->first();
        if($user){
            if($user->role_id !=2){
                return back()->with('error', 'Sai email hoặc mật khẩu');
            }
        }
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Sai email hoặc mật khẩu');
    }

    public function history(){
        $logs = LoginRegisterLog::orderBy('created_at', 'desc')->paginate(20);

        return view('admin.logs', compact('logs'));
    }

    public function setLinkRedirect(){
        $link = Link::where('type', Link::TYPE_301)->first();
        if($link){
            return view('admin.redirect',compact('link'));
        }
        return view('admin.redirect');
    }

    public function postSetLinkRedirect(Request $request){
        $request->validate([
            'url' => 'required|max:255',
        ], [
            'url.required' => 'Vui lòng nhập đường dẫn.',
            'url.max' => 'Độ dài đường dẫn không được vượt quá 255 ký tự.',
        ]);
        $link = Link::where('type', Link::TYPE_301)->first();
        if($link){
            $link->url = $request->url;
            $link->save();

        }else{
            Link::create([
                'url' => $request->url,
                'type' => Link::TYPE_301,
            ]);
        }
        return redirect()->route('admin.setLinkRedirect')->with('success', 'Link đã được cập nhật.');
    }

    public function setLinkTopup(){
        $link = Link::where('type', Link::TYPE_TOPUP)->first();
        if($link){
            return view('admin.topup',compact('link'));
        }
        return view('admin.topup');
    }

    public function postSetLinkTopup(Request $request){
        $request->validate([
            'url' => 'required|max:255',
        ], [
            'url.required' => 'Vui lòng nhập đường dẫn.',
            'url.max' => 'Độ dài đường dẫn không được vượt quá 255 ký tự.',
        ]);

        $link = Link::where('type', Link::TYPE_TOPUP)->first();
        if($link){
            $link->url = $request->url;
            $link->save();

        }else{
            Link::create([
                'url' => $request->url,
                'type' => Link::TYPE_TOPUP,
            ]);
        }
        return redirect()->route('admin.setLinkTopup')->with('success', 'Link đã được cập nhật.');
    }
}
