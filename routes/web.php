<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;



Route::get('/', [PageController::class,'index']);
Route::get('/product/{id}/cart', [PageController::class,'add'])->name('product.cart.add');
Route::get('/product/show', [PageController::class,'show']);


// For Product


Route::get('/products/create', [PageController::class,'create']);
Route::post('/products/create', [ProductController::class,'store']);


Route::get('/flush',function(Request $request) {

$request->session()->flush();
});
