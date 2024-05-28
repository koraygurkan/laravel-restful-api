<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Coursem;

class CoursemController extends Controller
{
    public function index()
    {
        //Eğer model olmasaydı kontroller üzerinden verileri çekmiş olsaydık aşağıdaki gibi çekecektik;
        //$courseDB::table('coursem')->get()
        //model kullanımında direk verileri bu şekilde çekebiliyoruz. Model olduğu için
//        $coursem=Coursem::all();
//        foreach ($coursem as $key)
//        {
//            echo $key['course_title']."<br>";
        //Nesne olarak yazdırmak istersek;
        //echo $key->course_title
//        }

        //Kısıtlanmış veri çekme find()
////        $coursem=Coursem::find(1);
//        $coursem=Coursem::where('id',1)->first();
//        echo $coursem->course_title;
        //Koşulu birden fazla satır dönüyorsa get ile alabiliriz.
//        $coursem=coursem::where('course_must',1)->get();
//        foreach ($coursem as $casu)
//        {
//            echo $casu->course_content." <br>";
//        }

        //205. Insert Veri Ekleme
//        $coursem=new Coursem;
//        $coursem->course_title='Koray title 02';
//        $coursem->course_content='Koray Content 02';
//        $coursem->course_must='12';
//        if($coursem->save());
//        {echo "success!";}
        //207. Create, Fillable, guarded---------------------------
        //Create ile işlem yaparken model üzerinden istediğimiz tablolara izin vermemiz gerekiyor.
//        Coursem::create([
//            'course_title' => 'casu Create title 01',
//            'course_content'=>'cosu content create 01',
//            'course_must'=>13
//        ]);

        //208. Diğer Create Oluşturma Yöntemleri
        //Bu kayıt varsa oluşturmaz yoksa oluşturur.
//        Coursem::firstOrCreate([
//            'course_title' => 'casu Create title 30',
//            'course_content'=>'cosu content create 01',
//            'course_must'=>13
//        ]);
        //FirstorNew Varlık kontrolü yapıyor burada da. Varsa yada yoksa kaydettirebilirsiniz. Örnek aşağıadki gibi:
//        $coursem=Coursem::firstOrNew([
//            'course_title' => 'casu Create title 60',
//            'course_content'=>'cosu content create 60',
//            'course_must'=>15
//        ]);
//        if (!$coursem->exists)
//        {
//            $coursem->save();
//        }

        //209. Update Veri Güncelleme
//        $coursem=Coursem::find(1);
//        $coursem->course_title='Title Update';
//        $coursem->save();
        //WHERE METHOD ŞEKLİNE ÖRNEK
//        $coursem=Coursem::Where('id',2)->Update([
//           'course_title' => 'Where title Update'
//        ]);
        //210. Delete Veri Silme
//        $coursem=Coursem::find(5);
//        $coursem->Delete();
        //WHERE İLE SİLMEYE ÖRNEK
//        $coursem=Coursem::where('id',6)->delete();

        //211 Diğer Silme DELETE / Destroy Yöntemleri
//        Coursem::Destroy(12);

        //212 Soft DELETE YUMUŞAK SİLME
//        coursem::where('id',3)->delete();

        //213 withTrashed Yumuşak Silinenleri Dahil Etme
//        $coursem=Coursem::withTrashed()->get();
//        foreach ($coursem as $key)
//        {
//            echo $key->course_title."<br>";
//        }

        //214 onlyTrashed Sadece Yumuşak Silinenleri Gösterir
//        $coursem=Coursem::onlyTrashed()->get();
//        foreach ($coursem as $key)
//        {
//            echo $key->course_title."<br>";
//        }

        //215. withTrashed yumuşak silinenleri geri getirme
//        Coursem::withTrashed()->restore();
        //seçerek istediğimizi onarabiliriz.
//        Cousem::where('id',2)->restore();

        //Yumuşak silinen bir kaydı komple kaldırmak. forceDelete()
//        Coursem::withTrashed()->Where('id',3)->forceDelete();
    }
}
