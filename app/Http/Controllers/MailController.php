<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('mailsend');
    }
    public function sendmail(request $request)
    {
        $data=$request->only(['name','email']);
        Mail::to('info@gencomare.xyz')
            ->send(new SendMail($data));

        return back()->with('status','mail başarıyla gönderildi');
    }
}
