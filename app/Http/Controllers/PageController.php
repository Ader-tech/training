<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request){
        return view('index');
    } 
    public function login(Request $request){
        return view('login');
    } 
    public function register(Request $request){
        return view('register');
    } 
}

