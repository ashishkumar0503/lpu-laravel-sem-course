<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function getData(Request $req) {
        // $req->validate([
        // 'user' => 'required',
        // 'userpassword' =>'required'
        // ]);

        //return $req->input();
        $data= $req->input('user');
        $req->session()->put('user',$data);
        //echo session('user');
        return redirect('profile');
    }
}
