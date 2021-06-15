<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

Route::get('/index',[PageController::class, 'index']);
Route::get('/login',[PageController::class, 'login']);
Route::get('/register',[PageController::class, 'register']);
