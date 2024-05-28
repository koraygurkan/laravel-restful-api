<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    Public function index()
    {
        return view('sitehome');
    }
    public function ageCheck(Request $request)
    {
            echo "yaş doğrulama başarılı";
    }
}
