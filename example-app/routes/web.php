<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/sendemail', function (Request $request) {
    $email = $request->get('email');
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/';

    if (preg_match($pattern, $email)){
        $msg = 'success';
    } else {
        $msg = 'fail';
    }
    return response()->json([ 'msg'=> $msg]);
});