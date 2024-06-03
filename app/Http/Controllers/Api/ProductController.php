<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
//use Psy\Util\Str;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return Product::all();
        //return response()->json(Product::all(),200);
        //return response(Product::all());

//        return response(Product::paginate(10),200);

        //Offset bir veritabanındaki kayıtların kaçıncı kayıttan başlayacağını belirtir.
        //Limit bu kayıttan itibaren kaç kayıt alacağını belirtir.
        //(Request $request) indexe bu değeri vermek gerekli bu methodun çalışması için
//        $offset=$request>offset ? $request>$offset : 0;
//        $limit=$request->limit ? $request->limit : 10;
//        return response(Product::offset($offset)->limit($limit)->get(),200);

        $qb=Product::query();
        if ($request->has('q'))
            $qb->where('name','like','%'.$request->query('q').'%');

        if ($request->has('sortBy'))
            $qb->orderBy($request->query('sortBy'), $request->query('sort','DESC'));

        return response($qb->paginate(10),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$input=$request->all();
        //$product=Product::create($input);

        $product=new Product;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;
        $product->save();


       return response([
           'data'=>$product,
           'message'=>'Product Created.'
       ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //return $product;
        return response($product,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //$input=$request->all();
        //$product->update($input);

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;
        $product->save();


        return response([
            'data'=>$product,
            'message'=>'Product Update.'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response([
            'message' => 'Product deleted'
        ],200);
    }
}
