<?php

use Illuminate\Support\Facades\Route;
use Msegat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $msg = Msegat::sendMessage('966xxxxxxxxx', 'رمز التحقق: 1234');
    dd($msg);
    return view('welcome');
});
