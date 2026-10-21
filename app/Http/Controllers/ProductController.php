<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
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


    public function edit( int $id)
    {
        $product = Product::find($id);
        return view('edit',compact('product'));
    }
    public function update( ProductUpdateRequest $request,int $id) {
        Product::query()->where('id',$id)->update($request->validated());
        return redirect()->route('products.index');
    }

    public function destroy (int $id ){
        Product::query()->where('id',$id)->delete();
        return redirect()->route('products.index');
    }
}
