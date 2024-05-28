<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class PageController extends Controller
{
    Public Function index()
    {
        //144 Tüm Satırları çekme-----------------
//        $blog=DB::table('blog')->get();
//        foreach ($blog as $yazdir)
//        {
//            echo $yazdir->blog_title."<br>";
//        }
        //145 Tek Satır Çekme WHERE---------------
//        $blog=DB::table('blog')
//            ->where('blog_id',3)
//            ->get();
//        dd($blog);
            //Tek tek verilere ulaşma---------------
//           ->first();
//            echo $blog->blog_title;
        //146 Diğere WHERE özellikleri---------------
       //Birden fazla varyasyon orWhere ile eklenebilir
//        $blog=DB::table('blog')
//            ->where('blog_id',3)
//            ->orWhere('blog_id',4)
//            ->get();
//        dd($blog);
        //WhereBetween iki değer arasındaki değerleri getirir,WhereNotBetween arasında olmayanları getirir
//        $blog=DB::table('blog')
//            ->WhereBetween('blog_id',[1,3])
//            ->WhereNotBetween('blog_id',[1,3])
//            ->get();
//        dd($blog);
        //WhereIn direk seçilileri getirir,
        //WhereNotIn seçili dışındakileri getirir
        //WhereNull('blog_must) boş olanı getirir.
        //WhereNotNull('blog_must) Dolu olanları getirir
        //WhereDate('blog_date','2023-07-18') -> İlgili tarihi işaret edebiliriz.
        //WhereMonth('blog_date','07') -> Ayı işaret edebiliriz
        //WhereDay('blog_date','18') -> Günü işaret edebiliriz.
        //WhereTime('blog_date','12:00:05') -> Saati işaret edebiliriz.
        //WhereColumn('blog_title','blog_title') -> Birbirine eşit olan sütunları getirir.
//        $blog=DB::table('blog')
//            ->WhereIn('blog_id',[1,3])
//            ->get();
//        dd($blog);
        // 147 Bir kayıttan tek değer çıkarma ------------------------
//        $blog=DB::table('blog')
//            ->where('blog_id',1)
//            ->value('blog_title');
//        dd($blog);
        //148 Satırı Kimlik Değerlerine Göre Çekme ------------------------
//        $blog=DB::table('blog')->find(1);
//        dd($blog);
        //149 Sütun değerlerinin listesini alma ------------------------
//        $blog=DB::table('blog')
//            ->pluck("blog_title");
//        dd($blog);
        //150 Toplam kayıt sayısını gösterme, Kullanım Örnek: ->count()
        //151 Min Max Kayıtlarını Bulma, Kullanım Örnek: ->min('blog_must) ->max(''blog_must)
        //152 Metot Zircirleme, Birden fazla yöntem kullanılabilir. Sadece tek metor kullanılmak zorunda değildir.
//        $blog=DB::table('blog')
//            ->Where('blog_title','Blog Title 01')
//            ->min('blog_must');
//        dd($blog);
        //153 Kayıt Varlık Kontrolü -> exists() kullanırsanız değer yoksa false,
        // -> DoesntExists() değer yoksa True döndürür.
//        $blog=DB::table('blog')
//            ->where('id','1')
//            ->exists();
//        dd($blog);
        //154 Özel Sütun Seçim Select
//            $blog=DB::table('blog')
//                ->where(['blog_title','blog_content'])
//                ->get();
//            dd($blog);
        //155 Alias Tanımlama -- Sütun ismini değiştirebilir ve ilerleyen data çekim işlemlerinde o isimle yapabiliriz.
        // Dizi şeklinde de birden fazla değişiklik yapılabilir. 
//            $blog=DB::table('blog')
//                ->select('blog_title as new_title')
//                ->get();
//            dd($blog);
        //156 Join Tablo Birleştirme
//        $blog=DB::table('user')
//            ->join('blog','blog.user_id','=','user.id')
//            ->where('blog.id','4') //user tablosundeki 4 olanları getir diyerek sınırlandırdık
//            ->where('blog.id','=','4') //arada operatör kullanılabilir.
//            ->get();
//            foreach ($blog as $yaz)
//            {
//                echo '<br>-'.$yaz->blog_title;
//            }
        //157 Join WHERE
//        ->where('blog.id','4') //user tablosundeki 4 olanları getir diyerek sınırlandırdık
//        ->where('blog.id','=','4') //arada operatör kullanılabilir.
        //158 OrderBy
//        $blog=DB::table('user')
//            ->OrderBy('user_name','DESC')
//            ->limit(1) // bir adet kayıt getirir. ORderby'la birlikte kullanılabilir.
//            ->get();
//        foreach ($blog as $write)
//        {
//            echo $write->id.' '.$write->user_name.'<br>';
//        }
        //159 inRandomOrder
        //->inRandomOrder() rastgele getiriyor. ->first() bunu dersek de bir tane getirir. DD ile gösterebiliriiz.
        //160 limit, offset
//        $blog=DB::table('user')
//            ->offset(2) // ilk 2 kaydı atlayıp 3'üncüyü getir demek.
//            ->limit(1) // Kaç adet getireceğini limitliyor.
//            ->get();
//            dd($blog);
        //161 Insert Veri Ekleme -------------------------------------------------------------------------------
        //Tabloda Null olarak işaretleme gerekli, Yoksa hata verebilir.
//        $blog=DB::table('blog')
//            ->insert(
//                [
//                    'blog_title'=>'blog title 05',
//                    'blog_content'=>'blog content 05',
//                ]
//            );echo "<b>success</b>";
        //Çoklu veri ekleme, dizi içerisine alındı!----
//        $blog=db::table('blog')
//            ->insert(
//              [
//                  [
//                      'user_id'=>'4',
//                      'blog_title'=>'blog title 06',
//                      'blog_content'=>'blog content 06',
//                      'blog_must'=>'6'
//                  ],
//                  [
//                      'user_id'=>'4',
//                      'blog_title'=>'blog title 07',
//                      'blog_content'=>'blog content 07',
//                      'blog_must'=>'7'
//                  ]
//              ]
//            );echo "<b>$blog</b>";
        //163 Last ID Auto Increment Değerini alma (En son eklenen kaydın ID'sini alma)
        //->insertGetID() diye kullanılır. Insert yerine yazarsak son kayıt ID'sini alırız.
        //164 Update Veri Güncelleme-------------------------------------------------------------------------
//burayı kapattın en son
//        $blog=DB::table('blog')
//            ->Where('id','=','8')
//            ->Update(
//            [
//                'blog_title'=>'Blog title update',
//                'blog_content'=>'Blog Content update',
//                'blog_must'=>25
//            ]
//            );
//        echo $blog;

        //165 updateOrInsert Güncelle veya Ekle Varsa günceller yoksa yenisini ekler!
//        $blog=DB::table('blog')
//            ->updateOrInsert(
//                [
//                    'blog_title' => 'Blog Title 31'
//                ],
//                [
//                    'blog_title' => 'Blog Title 40'
//                ]
//            );
//        echo $blog;
        //166 Toplu Arttırma ve Eksiltme
        // Arttırma increment();
        // Azatma Decrement();
//            $blog=DB::table('blog')
//                ->Decrement(
//                    'blog_must','1'
//                );
//            echo $blog;
        //167 Delete Veri Silme-------------------------------------------------------------------------
//        $blog=DB::Table('blog')
//            ->where('id','9')
//            ->Delete();
//        echo $blog;
//        168 Truncate komple Sıfırlama
//        $blog=DB::Table('blog')
//        ->Truncate();

        //TABLO KONTROLÜ YAPMA
//if (Schema::hasTable('blogs1'))
//{
//    echo "<b style='color:red;background: yellow '>tablo var kardeş</b>";
//}else
//{
//    echo "tablo mevcut değil baba";
//}
//TABLO İSMİ DEĞİŞTİRME.
//schema::rename('blogs','koray_blogs');
//TABLO SİLME
schema::drop('koray_blogs');







    }

}
