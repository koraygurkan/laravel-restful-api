<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *Product
 *
 * @mixin \Eloquent
 */

/**
 * @OA\Schema (
 *     title="Product",
 *     description="Product Model",
 *     type="object",
 *     schema="Product",
 *     properties={
 *     @OA\Property(property="id", type="integer", format="inet64", description="id column"),
 *     @OA\Property(property="name", type="string")
 *      },
 *     required={"id","name"}
 *  )
 * */

class Product extends Model
{
    //protected $table='products'; //burada izin verdiği tabloyu belirtiriz.
    //protected $fillable=['name','slug','price']; //burada izin verdiği sütunları belirtiriz.

    //burada tüm alanlara eklenebilir, ama bir sütun bildirirsem o sütuna eklenemez diyecektir.
    protected $guarded=[];
    //protected $hidden=['slug']; // tüm veri çekmelerde gizlenecek

    public function categories()
    {
        return $this->belongsToMany('App\Category','product_categories');
    }
}
