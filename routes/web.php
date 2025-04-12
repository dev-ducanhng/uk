<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeetestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MobileController;
use App\Models\LoginRegisterLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::post('/update-phone', [AuthController::class, 'savePhone']);
    Route::post('/dismiss-phone-prompt', function () {
        session()->forget('show_phone_prompt');
        return response()->json(['message' => 'dismissed']);
    });
});
Route::get('/recapcha', [HomeController::class, 'recapcha']);
Route::post('mobile/login', [MobileController::class, 'login'])->name('mobile.login');
Route::get('/mobile', [MobileController::class, 'index'])->name('mobileHome');
Route::get('/mobile/serviceCenter', [MobileController::class, 'serviceCenter'])->name('service');
Route::get('/mobile/transaction', [MobileController::class, 'transaction'])->name('transaction');
Route::get('/mobile/membercenter', [MobileController::class, 'memberCenter'])->name('membercenter');

Route::get('/link-301', [LinkController::class, 'redirect'])->name('link301');
Route::get('/link-topup', [LinkController::class, 'redirectTopup'])->name('linkTopup');
Route::get('/captcha/init', [GeetestController::class, 'initCaptcha']);
Route::post('/captcha/verify', [GeetestController::class, 'verify']);

Route::get('/admin/login', [Admincontroller::class, 'login'])->name('admin.login');
Route::post('/admin/login', [Admincontroller::class, 'loginSubmit'])->name('admin.login.submit');
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/history', [Admincontroller::class, 'history'])->name('admin.history');
    Route::get('/set-link-301', [Admincontroller::class, 'setLinkRedirect'])->name('admin.setLinkRedirect');
    Route::post('/set-link-301', [Admincontroller::class, 'postSetLinkRedirect'])->name('admin.postSetLinkRedirect');
    Route::get('/set-link-topup', [Admincontroller::class, 'setLinkTopup'])->name('admin.setLinkTopup');
    Route::post('/set-link-topup', [Admincontroller::class, 'postSetLinkTopup'])->name('admin.postSetLinkTopup');
});
