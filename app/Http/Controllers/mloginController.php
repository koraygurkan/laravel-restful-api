<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mloginController extends Controller
{
    public function index()
    {
        return view('mlogin');
    }
    public function authenticate(request $request)
    {
        $credentials=$request->only('email','password');

//        if (Auth::attempt($credentials))
//        {
//            //intended() Mesela E-ticaret sitesinde adam bir ürün almaya girer yarıda keser logine atarsın, o sayfayı aklında tutar login olunca o sayfaya geri gönderir.
//            return redirect()->intended('home');
//        }
//        else
//        {
//            echo "kayıt yok";
//        }

        $remember=$request->has('remember')? true : false;

        //Attempt methodu ne verirse onu doğruluyor.
        if (Auth::Attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'id'=>1
        ],$remember))
        {
            return redirect()->intended('home');
        }else
        {
            echo "böyle bir kayıt bulunamadı";
        }


    }

    public function mlogout()
    {
        Auth::logout();
        return redirect('mlogin');
    }

}
