<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VloggerController extends Controller
{
    public function vlogger()
 {
     return view('vlogger');
 }

    public function login(){
        if(view::exists('vlogger.login')){
            return view('vlogger.login');
        
        }else{
            return abort(404);
        }
    }
}
