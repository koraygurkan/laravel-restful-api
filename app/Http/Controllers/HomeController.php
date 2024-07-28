<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>'upload_form']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        Auth::User()->name;
        $user=Auth::User();
        //Setlocal ile dili değiştirebiliriz.
//        \App::setLocale('en');

        $locale=\App::getLocale();
        $str = strtoupper($locale);

        return view('home', $user)->with('dil',$str);
    }

    public function upload_form()
    {
        return view('upload_form');
    }

}
