<?php

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// index done

Route::prefix('products')->group(function () {
Route::get('/',function(){
    $products = Product::all();
    return view('index',compact('products'));
})->name('products.index');

Route::get('/create',function(){
   return view('create');
})->name('products.create');

Route::post('/store',function(ProductStoreRequest $request){
    Product::create($request->validated());
    return redirect()->route('products.index');
})->name('products.store');


// Route::Post('/products',function(){
//     $products = Product::all();
//     return view('index',compact('products'));
// });
});
