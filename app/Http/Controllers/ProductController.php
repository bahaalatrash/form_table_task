<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {


        $products = Product::paginate(10);
        return view('index', compact('products'));

        //  return Product::all();

    }


    public function create()
    {
        return view('create');;
    }
    public function store(ProductStoreRequest $request)
    {
        Product::query()->create($request->validated());
        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $name = $request->search;
        $products = Product::where('name', $name)->get();
        return view('search', compact('products', 'name'));
    }
}
