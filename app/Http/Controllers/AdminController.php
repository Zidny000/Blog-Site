<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin.adminDashboard');
    }

    public function showlogin() {
        return view('admin.login');
    }

    public function login(){
        $this->validate(request(),[
           'name'=>'required',
           'password' => 'required'
        ]);

        if(Auth::attempt(['name' => request('name'), 'password'=>request('password'), 'role'=>'admin' ])){
            return redirect()->route('admin.dashboard');
        }else{
            return "credential does not match";
        }
    }

    public function logout(){

        if(Auth::user()->role == admin){
            Auth::logout();
            return redirect('/admin/login');
        }else{
            Auth::logout();
            return redirect()->route('user.login');
        }



    }
}
