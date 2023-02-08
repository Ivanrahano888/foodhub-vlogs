<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
 {
     return view('user');
 }

    public function login(){
        if(view::exists('user.login')){
            return view('user.login');
        
        }else{
            return abort(404);
        }
    }
}
