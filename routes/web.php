<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return view('welcome');
});
/* apo yazdı
Route::get('/giris', function () {
    return view('auth.login');
});
*/

Route::get('uyelik',function (){
return view('uyelik');
})->middleware('auth');

Route::get('mlogin', 'mloginController@index')->name('mlogin');
Route::get('mlogout', 'mloginController@mlogout')->name('mlogout');

Route::post('mloginCheck', 'mloginController@authenticate')->name('mloginCheck');

//Route::get('checkage', 'AgeController@index');
Route::get('checkage',function (){
   if (Gate::Allows('checkage',Auth::user()))
   {
       return view('sitehome');
   }else
   {
       echo "giriş yapamadın ahahahahah";
   }
});

Route::post('ageCheckPost', 'AgeController@ageCheck')
    ->name('ageCheckPost')
    ->middleware('CheckAge');






//-----------------------------------------------------------------------------------------------------------------------
Route::get('/page1', function () {
//    return view('page1');
    return view('page1',['isim'=>'uras']);
});

Route::get('/page2', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/page', function () {
//    $data=[
//        "ad" => "koray",
//        "soyad" => "danaci"
//        ];
////    return view('page')->with($data);
//////    return view('page')->with(["ad" => "koray", "soyad" => "danacı"]);
//////    return view('page')->with('ad','koray')->with('soyad','danaci');
//    return view('page',compact('data'));
//});

Route::get('page', 'Page1Controller@index');
Route::get('database', 'PageController@index');

//Route::get('/', function () {
////    return view('course',['adsoyad'=>'Koray Gurkan Danacı']);
///
//    return response()->json([
//        'course_title'=>'php title',
//        'course_content'=>'php içerik',
//        'course_must'=>'100',
//    ]);
//});

Route::get('/casu', function () {
    //redirect direk gösterir download methodu direk indirir.
    //    return redirect('/download/file.txt');
    //return response()->download('download/file.txt');

//    return response()->HomeMessage('Burasi ana sayfa kardess');
    //appServiceProvider ile fonksiyon ile mesajı yazıp birleştirebiliriz.

    //**** URL yolunu almamızı sağlar.
    return url()->full();
    //**** Bir önceki isteğin URL'sini almamızı sağlar. Redirect örneğinde de otomatik bir önceki url'e yönlendirme yapar.
    return url()->previous();
    return redirect(url()->previous());
});

Route::get('course', 'CourseController@index')->name('courseget');

Route::get('courseInsert', 'CourseController@courseInsert')->name('courseInsert');
Route::post('courseInsertPost', 'CourseController@courseInsertPost')->name('courseInsertPost');

Route::get('courseUpdate/{id}', 'CourseController@courseUpdate')->name('courseUpdate');
Route::post('courseUpdatePost/{id}', 'CourseController@courseUpdatePost')->name('courseUpdatePost');

Route::get('courseDelete/{id}', 'CourseController@courseDelete')->name('courseDelete');


Route::get('coursem', 'CoursemController@index')->name('coursemget');




Route::get('/collection', function () {
    $collection=collect([1,2,3,4,76,58,1]);
    // return $collection->all(); //tümünü listeler
    // return $collection->avg(); //ortalama alır
    // return $collection->count(); //toplam dizi elemanını alır.
    // return $collection->min();
    // return $collection->max();
    // return $collection->dd(); //dd() arkasındaki kodların çalışmasını durdurur
    // return $collection->diff('1'); //iki dizi elemanlarını karşılaştırır eşleşmeyenleri listeler
    // return $collection->duplicates(); //aynı olanları gösterir
    // return $collection->except(0); //istemediğini hariç tuttu
    //   return $collection->only(0,1,2); //only yalnızca alacaklarını gösterir
//        $filtered=$collection->filter(function ($value,$key){
//            return $value>50;
//        });
//            return $filtered->all();
    // return $filtered->first(); //ilkini yazdırır
    // return $filtered->last(); // Sonuncuyu yazdırır
//        return $collection->random(4); // Rastege değer alır, yazdığımız değer kadar rastgele sıralama yapar.
    // return $collection->search(2); // Değer var mı diye bakıyor. Boolean olarak verir 1 yada 0
//        if($collection->search(2))
//        {
//            return "Var";
//        }
//        else{
//            return "yok";
//        }
//        $arg=$collection->shuffle(); // Dizi elemanlarını rastgele karıştırmaya yarar.
//        return $arg->all();
//        return $collection->sort()->values()->all(); // Sıralama yapar
//        return $collection->sum(); // Dizideki elemanları toplar
    // aynı benzer dizi elemanlarını
    return $collection->unique()->values()->all();
////---------------------
//        $collection=collect([
//            'ad' => 'uras',
//            'soyad' => 'dogan',
//            'yaş' => '2 Buçuk'
//        ]);
    //return $collection->flatten(); // Çok boyutlu Dizileri birleştirir
    // return $collection->forget('ad'); //Diziden çıkartır.
    // return $collection->get('ad'); //Herhan
    ////        return "sonuç".$collection->IsEmpty(); /gi bir dizi elemanını tekil olarak ayrıştırmak ve döndürmek için kullanılır./Dizi boşsa 1 değerinin döndürür. Boolean olduğu için string ekledik hata almamak için.
//        //
//        return "sonuç".$collection->isNotEmpty(); //Dizi doluya 1 değerinin döndürür!!!
//        $collection->pull('ad'); // Belirtilen anahtar kelimedeki alanı kaldırıyor kalanı döndürüyor
//--------------------------------------------------------
//        $collection=collect([
//            ['id'=> '1', 'ad' => 'uras'],
//            ['id'=> '2', 'ad' => 'cansu'],
//            ['id'=> '2', 'ad' => 'koray'],
//            ['id'=> '2', 'ad' => 'gurkan']
//        ]);
//       //return $collection->all(); //Döngüe almadığımız için yalnızca sonuncuyu gösterir
////        $plucked=$collection->pluck('ad'); //İstediğimiz sütunları bir kerede yazdırmaya yarar
////        return $plucked->all();
////        $collection->pop(); // Dizideki son elemanı gizler
// //       $collection->prepend('1','3'); // Dizi ek ekleman eklemek istendiğinde kullanılır.!
//        return $collection->sortBy('ad')->values()->all(); //Dizilerde seçilen sütunu sıralarsın.
//        return $collection->sortByDesc('ad')->values()->all(); //Dizilerde seçilen sütunu TERSTEN sıralarsın.
//        return $collection->all();


});

//cevap yanıt
//Route::get('/', function () {
//    return response('koray uras',200)
//    ->header('Content-Type','application/pdf');
//});

//Yönlendirme
//Route::get('/', function () {
//return redirect('course');
//    return redirect(route('courseInsert'));
//});

//Route::get('show', 'Page1Controller@index');
//
//Route::group(['namespace' => 'Backend'], function () {
//    Route::get('page2/{ad?}/{soyad?}', 'Page2Controller@index');
//
//    Route::get('page3', 'Page3Controller@index')->name('backend.page3');
//
//    Route::get('page4', 'Page4Controller@index');
//    route::get('single','SingleController');
//});
//
//Route::get('/backend', function () {
//    return view('backend/index');
//});
//
//Route::get('/frontend', function () {
//    return view('frontend.index');
//});
//

//Route::get('/newpage', function () {
//    return view('newpage');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/mailsend', 'MailController@index');

Route::post('/sendmailpost', 'MailController@sendmail')->name('sendpost');
