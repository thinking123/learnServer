<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function home(){
        return 'this is test of home';
    }

    public function test1(){
        return view('testpage.page1')->with('fun' , 'this is fun params');
    }

    public function postfun(){
//        $t = Input::get('title');
    }
}
