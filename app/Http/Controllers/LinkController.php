<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function redirect(){
        $link = Link::where('type', Link::TYPE_301)->first();
        if($link){
            return view('redirect-301',compact('link'));
        }
        return view('redirect-301');
    }
    public function redirectTopup(){
        $link = Link::where('type', Link::TYPE_TOPUP)->first();
        if($link){
            return view('redirect-topup',compact('link'));
        }
        return view('redirect-topup');
    }
}
