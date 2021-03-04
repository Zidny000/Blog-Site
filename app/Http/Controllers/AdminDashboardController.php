<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDashboardController extends Controller
{
    public function roleChange(){
        User::find(request('user_id'))->update([
            'role' => request('role')
        ]);

        return redirect()->back();
    }

    public function disable($id){
        User::find($id)->update([
            'verified' => 0
        ]);

        return redirect()->back();
    }

    public function enable($id){
        User::find($id)->update([
            'verified' => 1
        ]);

        return redirect()->back();
    }

    public function createPostShow(){
        return view('admin.post');
    }

    public function createPost(){
        $this->validate(request(),[
            'title' => 'required',
            'details' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'details' => request('details')
        ]);
        $title=\request('title');
        $emails = User::all('email');

        foreach($emails as $eamil){
            Mail::to($eamil)->send(new SendMail(null,$title));
        }



        return redirect()->back();


    }

    public function managePostDelete($id){


         $post = Post::find($id);

        $post->delete();
        return redirect()->back();
    }

    public function managePostUpdate($id){


        $post = Post::find($id);

        return view('admin.editPost',compact('post'));

    }
    public function managePostUpdateConfirm($id){


         Post::find($id)->update([
            'title' => request('title'),
            'details' => request('details')
        ]);

        return redirect('admin/post/manage');

    }

}