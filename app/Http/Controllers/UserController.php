<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Verify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class UserController extends Controller
{



    public function showRegister(){
        return view('register');
    }

    public function showLogin(){
        return view('login');
    }

    public function login(){
        $this->validate(request(),[
            'name'=>'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['name' => request('name'), 'password'=>request('password'), 'role'=>'user','verified'=>'1' ])){
            return redirect('/');
        }elseif (Auth::attempt(['name' => request('name'), 'password'=>request('password'), 'role'=>'mod','verified'=>'1' ])){
            return redirect()->route('admin.dashboard');
        }else{
            return "credential does not match";
        }




    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request) {



        $this->validate(request(),[
            'name' => 'required | alpha_dash',
            'email' => 'required | email | unique:users,email' ,
            'password' => 'required | min:4 | confirmed'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->verified = 0;
        $user->role = 'user';

        $user->save();

        $token = Verify::create([
            'token' => md5(rand()),
            'user_id' => $user->id
        ]);

        


        Mail::to($request->email)->send( new SendMail($token->token) );

        return redirect('/')->with('regSuccess','User Register Successful');
    }

    public function verify($token){

        $result = Verify::where('token',$token)->get();

        if(count($result) >= 1){




            $result = $result->first()->user_id;
            User::find($result)->update([
                'verified' => 1
            ]);

            return redirect('/')->with('verifySuccess','Email Verified');

        }else{
            return 'Invalid Request Try Again';
        }

    }

    public function showContact(){
        return view('contact');
    }

    public function addMessage(Request $request ){
        $this->validate(request(),[
            'name' => 'required | alpha_dash',
            'email' => 'required | email | unique:users,email' ,
            'number' => 'required ',
            'message' => 'required '
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->number = $request->number;
        $message->messages = $request->message;

//        dd('sefhgshgfhsfth');
        $message->save();

        return view('contact');
    }
}
