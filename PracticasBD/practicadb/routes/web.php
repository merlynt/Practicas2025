<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiveController;
Route::get('/', function () {
    return view('welcome');

});
Route::resource('hives', HiveController::class);