<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table='products'; //burada izin verdiği tabloyu belirtiriz.
    //protected $fillable=['name','slug','price']; //burada izin verdiği sütunları belirtiriz.

    //burada tüm alanlara eklenebilir, ama bir sütun bildirirsem o sütuna eklenemez diyecektir.
    protected $guarded=[];
}
