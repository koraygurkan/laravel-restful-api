<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke(){
        echo "Ben Invoke ve hemen çalıştım hehrey";
    }
}
