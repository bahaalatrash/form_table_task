<?php

use App\Http\Controllers\ProductController;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// index done

Route::prefix('products')->group(function () {

// refactor the  routes
Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/',[ProductController::class,'store'])->name('products.store');
Route::get('/search',[ProductController::class,'search'])->name('products.search');


// Route::get('/',function(){
//     // $products = Product::all(); /// using controller more orgnized
//         $products = [ProductController::class,'index'];

//     //for pagination
//    // $products = Product::paginate(10);
//     return view('index',compact('products'));
// })->name('products.index');



// Route::get('/create',function(){
//    return view('create');
// })->name('products.create');




// Route::post('/',function(ProductStoreRequest $request){
//     Product::create($request->validated());
//     return redirect()->route('products.index');
// })->name('products.store');

});
