<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserPageController;



Route::get('/', [PageController::class, 'index']);
Route::get('/show', [PageController::class, 'show']);



//User Route
Route::get('/user-dashboard', [UserPageController::class, 'userDashboard']);
Route::get('/profile', [UserPageController::class, 'profile']);
Route::get('/change-password', [UserPageController::class, 'changePassword']);
Route::get('/edit-profile', [UserPageController::class, 'editProfile']);
Route::get('/view-posts', [UserPageController::class, 'viewPosts']);
Route::get('/post/edit', [UserPageController::class, 'editPost']);



//Admin Route
Route::get('/index',[PageController::class, 'index']);
Route::get('/login',[PageController::class, 'login']);
Route::get('/register',[PageController::class, 'register']);

