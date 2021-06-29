<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function userDashboard(){

        return view('User.user-dashboard');
    }

    public function profile(){

        return view('User.profile');
    }

     public function changePassword(){
        
        return view('User.change-password');
    }

    public function editProfile(){

        return view('User.edit-profile');
    }

     public function viewPosts(){
        
        return view('User.view-posts');
    }

    public function editPost(){

        return view('User.Post.edit');
    }
}
