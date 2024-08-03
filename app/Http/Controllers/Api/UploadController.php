<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('uploadFile');
        //Yükleme yapacağımız Dosyanın orjinal adını almayı sağlıyor. getclientoriginalname()
        $fileNameWithExtension=$file->getClientOriginalName(); //kullanıcının gönderdiği dosya adı
        //hangi klasöre kaydedeceğimizi sağlıyor move methodu
        if($file->move(public_path('/'),$fileNameWithExtension))
        {
            $fileUrl=Url('/'.$fileNameWithExtension);
            return response()->json([ 'url'=>$fileUrl ]);
        }
    }
}
