<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Home;
use App\Livewire\Product;
use App\Livewire\ProductCreate;
use App\Livewire\ProductCreateClassification;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

/**
 * Rotas de produto
 */
Route::get('/product/create', ProductCreate::class);
Route::get('/product', Product::class);
Route::get('/product/createClassification', ProductCreateClassification::class);
Route::controller(ProductController::class)->group(function() {

    //Route::get('/', 'addProd');
})->prefix("/product");
