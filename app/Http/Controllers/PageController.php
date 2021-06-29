<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        return view('index');
    } 

    public function show()
    {
        return view('show');
    }
    public function login(Request $request){
        return view('login');
    } 
    public function register(Request $request){
        return view('register');
    } 
}
