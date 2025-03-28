<?php

/**
 * @OA/Info(
 *     version="1.0.0",
 *     title="Laravel API Documentation",
 *     description="This is a sample API documentation.",
 *     termsOfService="https://restful.koraygurkandanaci.com.tr/api/terms",
 *     @OA\Contact(email="cmg.web@gmail.com"),
 *     @OA\License(name="Apache 2.0", url="http://apache.org/licenses/LICENSE-2.0.html")
 * )
 */

/**
 *  @OA\Schema (
 *     title="Product",
 *     description="Product Model",
 *     type="object",
 *     schema="Product",
 *     properties={
 *     @OA\Property(property="id", type="integer", format="int64", description="id column"),
 *     @OA\Property(property="name", type="string")
 *      },
 *     required={"id","name"}
 *  )
 */

/**
 *   @OA\Get(
 *     path="/api/products",
 *     tags={"product"},
 *     summary="List all products",
 *     @OA\Parameter(
 *     name="limit",
 *     in="query",
 *     description="Limit belirleyiniz",
 *     required=false,
 *     @OA\Schema(type="integer", format="int32")
 *      ),
 *     @OA\Response(
 *     response=200,
 *     description="A paged array of products",
 *     @OA\JsonContent(
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/Product")
 *       )
 *     ),
 *     @OA\Response(
 *     response=401,
 *     description="Unauthorized",
 *     @OA\JsonContent()
 *      )
 * )
 */



