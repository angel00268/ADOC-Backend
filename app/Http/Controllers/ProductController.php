<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [];
        $colors  = (request()->has('colors') && request('colors') != '') ? request('colors') : '';
        $sizes  = (request()->has('sizes') && request('sizes') != '') ? request('sizes') : '';
        $min  = (request()->has('min') && request('min') != '') ? request('min') : '';
        $max  = (request()->has('max') && request('max') != '') ? request('max') : '';

        $query = Product::select('products.*');

        if ($colors) {
            $decodedColors = json_decode(str_replace("'", '"', $colors), true);
            $query->whereJsonContains('colors', $decodedColors);
        }

        if ($sizes) {
            $decodedSizes = json_decode(str_replace("'", '"', $sizes), true);
            $query->whereJsonContains('sizes', $decodedSizes);
        }

        if ($min) $query->where('price', '>=', $min);
        if ($max) $query->where('price', '<=', $max);

        $products = $query->get();

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
