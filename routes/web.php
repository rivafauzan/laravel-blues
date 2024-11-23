<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     echo 'selamat datang';
// });

route::get('/', [HomeController::class,'dashboard']);

route::get('/user', [HomeController::class,'index']);
