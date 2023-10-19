<?php

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

// TOPページ（All in one Schedulerの紹介ページ）
Route::get( '/', function () {
    return view( 'home' );
} );

// ログインページ
// Route::get( '/login', [AuthController::class, 'index'] );
