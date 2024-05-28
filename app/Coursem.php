<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Coursem extends Model
{
    //Tablo ismini modelden farklı yapmak istersem bu yöntemle verileri çekebilirim.
    //protected $table='course';
    //Not Created_at ve Updated_at sütunları Modelde zorunlu. Veri eklerken gerekiyor. Buna da müdahale edilebilir. Örnek aşağıdaki gibi;
    //public $timestaps=$false;
    //İZİN VERDİĞİM SÜTUNLARI $fillable
    protected $fillable=['course_title','course_content','course_must'];
    //izin vermeyeceğim sütunları $guarded. Aynı anda ikisi de kullanılamaz.
//    protected $guarded=['course_title'];
use softdeletes;
}
