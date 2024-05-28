<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
   public function index()
   {
       $data=[
         'php' =>
         [
             'title' => 'php',
             'laravel' =>'koray',
              'time'    => '90 minutes'
         ],
           'bootstrap' =>
               [
                   'title' => 'bootstrap',
                   'laravel' =>'koray',
                   'time'    => '60 minutes'
               ]
       ];
       return view('backend.index',$data);
   }

   public function show(){
       echo "show çalıştı casu";
   }

}
