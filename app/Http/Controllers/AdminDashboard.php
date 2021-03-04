<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function showUser(){
        $users = User::all();
        $userType = ['admin','mod','user'];
        return view('admin.user',compact(['users','userType']));
    }

    public function managePost(){
        $posts = Post::all();

        return view('admin.managePost',compact('posts'));
    }


}
