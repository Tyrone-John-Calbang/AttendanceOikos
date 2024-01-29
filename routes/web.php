<?php

use App\Http\Controllers\ForgotPassword;
use Illuminate\Support\Facades\Route;

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

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/',function(){
    return view('login');
});

Route::post('/submitcode', [ForgotPassword::class,'submit']);


//Routes for admins
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});