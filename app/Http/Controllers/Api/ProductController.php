<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductWithCategoriesResource;
use App\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
//use Psy\Util\Str;
use Illuminate\Support\Str;

class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
     *     path="/api/products",
     *     tags={"product"},
     *     summary="List all products",
     *     @OA\Response(
     *     response=200,
     *     description="A paged array of products"
     *     )
     * )
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

        $qb=Product::query()->with('categories');
        if ($request->has('q'))
            $qb->where('name','like','%'.$request->query('q').'%');

        if ($request->has('sortBy'))
            $qb->orderBy($request->query('sortBy'), $request->query('sort','DESC'));

//        $qb=$qb->makeHidden('slug'); // yalnızca index methodunda gizleneeck !çalışmıyor!

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
    public function show($id)
    {
        //return $product;
        //ilk yöntemle
//        $product=Product::find($id);
//        if ($product)
//            return response($product,200);
//        else
//            return response(['message'=>'Product not found'],404);

        //Try-Catch ile hata yakalama
        try{
            $product=Product::findOrFail($id);
            return $this->apiResponse(ResultType::Success,$product,'Product Found, Success',200);
        }
        catch (ModelNotFoundException $exception)
        {
            return $this->apiResponse(resultType::Error,null,'product not found!',404);
        }



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

    public function custom1()
    {
//        return Product::select('id','name')->orderBy('created_at','desc')->take(10)->get();
        //takma isim tanımlayarak veri çekme
        return Product::selectRaw('id as product_id, name as product_name')
            ->orderBy('created_at','desc')
            ->take(10)
            ->get();
    }

    public function custom2()
    {
            $products=Product::OrderBy('created_at','desc')->take(10)->get();
            $mapped=$products->map(function ($product) {
                return [
                    '_id'=>$product['id'],
                    'product_name'=>$product['name'],
                    'product_price'=>$product['price']*1,03
                ];
            });
            return $mapped->all();
    }

    public function custom3()
    {
        $products=Product::paginate(10);
        return ProductResource::collection($products);
    }

    public function listWithCategories()
    {
        $products=Product::paginate(10);
        return ProductWithCategoriesResource::collection($products);
    }


}
