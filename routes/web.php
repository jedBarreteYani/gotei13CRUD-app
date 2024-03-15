<?php

use App\Http\Controllers\CaptainController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ZanpakutoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layout');
});

Route::resource('/members', MemberController::class);

Route::resource('/captains', CaptainController::class);

Route::resource('/zanpakutos', ZanpakutoController::class);