<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
