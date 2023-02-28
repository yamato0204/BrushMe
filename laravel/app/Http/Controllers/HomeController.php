<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
/**
 * ホーム画面表示
 */
    public function index(){

        return view('home');
    }

    public function user(){

        return view('user');
    }

   

}
