<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use PhpParser\Node\Stmt\Return_;
use Validator;
use App\Rules\Age;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {

        $course=DB::table('course')
            ->orderBy('course_must','asc')
            ->get();
        //return view('course')->with('course',$course);
        //191 Kurs verilerinin Compact Methodu ile gönderilmesi
        return view('course',compact('course'));
    }
    //public function courseInsert(Request $request)
    public function courseInsert()
    {
    return view('courseInsert');


//        dd($request);
    //        return $request->all();
//        return $request->input();

//        echo $request->input('course_title');
//        echo "<br>";
//        echo $request->input('course_content');
//        echo "<br>";
//        echo $request->input('course_must');
//        echo "<br> dataları aldım!";
//        echo $request->course_title;
//verileri tek tek çekme yöntemleri yukarıdakiler.

//        return $request->path();
//
//        if($request->path()=="courseInsert")
//        {
//            return $request->all();
//        }
//        else
//        {
//           echo "beklenmeyen İstek! eheheheh";
//        }

//        if($request->is('courseInsert/*'))
//        {
//            return $request->all();
//        }
//        else
//        {
//            echo "beklenmeyen İstek! eheheheh";
//        }

//        echo $request->url();

//         if($request->isMethod("post"))
//         {
//             echo "post methodu";
//         }else
//         {
//             echo "no";
//         }

// istenmeyen verileri bu şekilde çıkartabiliyoruz.
//        return $request->except(['_token']);

        // *** sadece kullanacaklarını yazıyorsun. kullanacaklarını veriyor sadece.
//        return $request->only('_token','course_title');

//böyle bir form elemanı var mı yok mu bunun için kullanılıyor. formun name elemanının olup olmadığını kontorl ediyor.
//        if($request->has('course_title'))
//        {
//            echo "değer var";
//        }else
//        {
//            echo "değer yok!";
//        }

//İçinde değer var mı yok mu onu buluyor. Boş mu dolu mu onu kontrol ediyor yani.
//        if($request->filled('course_title'))
//        {
//            echo "değer var";
//        }else
//        {
//            echo "değer yok!";
//        }

        //aynı yere geri göndermeye yarıyor. ->return back();
        // Cachede tutup formları dolu getirir. Kullanıcı tekrar yazmayla uğraşmaz. Form eski yazdığı dolu gelsin flash!
//        $request->flash();
//        return back();

        //flashOnly sadece izin verdiklerim gözükecek
//        $request->flashOnly('course_title');
//        return back ();

        //flashExcept dışındakiler hariç cachede tut
//        $request->flashExcept('course_title');
//        return back();

//          return $request->file('course_file');
//          dd($request->file('course_title'));

//        if ($request->hasFile('course_file'))
//        {
//            echo "işlemler başladı";
//        }else
//        {
////            return redirect()->route('courseget');
//            return back()->with('status','Dosya Eklemelisiniz!');
//        }
//Session genellikle kullanıcı doğrulama işlemlerinde sunucu tarafında oluşturulan bir kimlik bilgisidir.
//            return $request->all();

//        $collection=collect([1,2,3,4]);
//        return $collection->all();
//   BÖLÜM 13 FORM VALİDATE DOĞRULAMA
//            $request->validate([
//            'course_title'=> 'required|min:5',
//            'course_content' => 'required'
//        ]);
//        return $request->all();
        // 120. Validator Sınıfı Kullanımı ve Manuel Doğrulama Kontrol
//        $validator=validator::make($request->all(),[
//            'course_title'=>'required'
//        ]);
//        if ($validator->fails())
//        {
//            return "Doğrulama işlemlerinde hata var";
//        }
//122 bu şekilde de hata kodunu ekrana yazdırabiliriz. ->validate() ilk Döngünün altına ekle;
//        $validator=Validator::make($request->all(),[
//            'course_title'=>'required'
//        ]);
//        $validator->after(function ($validator){
//            $validator->errors()->add('EkBilgi','hata yaptın eheheh hehehe :)');
//        })->validate();
//124 Özel doğrumala hata mesajları      ],$messages)->validate(); bu şekilde ekliyoruz mesaları en sona!!!messagesten sonraki alana
//        $messages=[
//            'required' => 'bu alan :attribute çok zorunlu',
//            'course_must.required' => 'özel hata mesajı alan :attribute ', //ilgili form elemana göre hata mesajı
//            'min' => 'en ufak benim eeheheheh'
//            ];
//        $validator=Validator::make($request->all(),[
////            'course_title'=>'min:4', //minimum değer belirler
//            'course_title'=>'required',
//            'course_content'=>'required',

//            'course_must'=>['required',new Age] //App\Rules\Age; buradaki hatayı gösterir ve kuralı buradan alır
        //    'course_must'=>'sometimes|required' //eğer koşul varsa bunu dahil ediyor.
            // 128 Hızlı Doğrulama Kuralı Oluşturma ------------
//            'course_must'=>[
//                'required',
//                function($attribue,$value,$fail){
//                if($value>=18){
//                    $fail($attribue.'18 yaşından büyükler kayıt olamaz...');
//                }
//                },
//                ]
        //129 Sonucun Yes On 1 Ya da doğru olduğunu söylemeli.
        ////            'course_confirm'=>'accepted',
            //130 Yazılan URL alanının var mı yok mu onun kontrolünü yapıyor. ----------
//            'course_content'=>'required|active_url'
        //131 after:date Tarih seçim sınırlaması yapar
//            'course_date'=>'after:10/5/2022'
//133 email olup olmadığını sorgular. Domaini olmayan emailleri yok sayar. Laravel özelliği!
//            'course_title'=>'email',
//        'course_password'=>'confirmed' // Forma password'ün name'ine password_confirmation demeliyiz.
////        'course_password'=>'same:course_password_confirmation';
        //135 confirmed--------------
//            'course_file'=>'file' // Dosya olması şartını verir, Type'nin verilen değere göre kontrol sağlar!
        //136 dosyalarda uzantı doğrulama kontrolü Mimes!
//            'course_file'=>'mimes:pdf,png'
//            'course_title'=>'filled', //Required ile benzer mantıkta iş yapar
//            'course_file'=>'image' // Dosya yalnızca resim olmalı

////         ])->validate();

    }
    Public function courseInsertPost(Request $request)
    {
        $request->validate([
            'course_title'=> 'required|min:5',
            'course_content' => 'required'
        ]);
//        return $request->all();
        $course=DB::table('course')->insert(
            [
                'course_title'=>$request->course_title,
                'course_content'=>$request->course_content,
                'course_must'=>$request->course_must
            ]
        );
        if ($course)
        {
        return back()->with('status','kayıt başarılı!');
        }
    }
    public function CourseUpdate($id)
    {
        $course=DB::table('course')
            ->where('id',$id)
            ->first();
//    Direk find methoduyla da id'yi alabiliriz.
//    ->find($id);
        //integere çevirerek bu şekilde yapabiliriz;
        //    ->find(intval($id));

        return view('courseUpdate',compact('course'));
    }

    Public function courseUpdatePost(Request $request,$id)
    {
        $request->validate([
            'course_title'=> 'required|min:5',
            'course_content' => 'required'
        ]);
//        return $request->all();
        $course=DB::table('course')
            ->where('id',$id)
            ->update(
            [
                'course_title'=>$request->course_title,
                'course_content'=>$request->course_content,
                'course_must'=>$request->course_must
            ]
        );
        if ($course)
        {
            return back()->with('status','Güncelleme başarılı!');
        }
    }

    Public function courseDelete($id)
    {
        DB::table('course')
            ->where('id',$id)
            ->delete();
        
        Return back();
    }

}
