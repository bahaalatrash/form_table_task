<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function store(ProductStoreRequest $request)
    {
        Product::query()->create($request->validated());
    }



}
