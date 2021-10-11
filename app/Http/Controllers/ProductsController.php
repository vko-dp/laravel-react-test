<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function actionIndex()
    {
        return Product::all();
    }

    public function actionShow(Product $product): Product
    {
        return $product;
    }

    public function actionStore(Request $request): JsonResponse
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function actionUpdate(Request $request, Product $product): JsonResponse
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function actionDelete(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json(null, 204);
    }

}
