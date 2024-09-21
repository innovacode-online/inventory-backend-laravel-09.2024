<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Sale\SaleController;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

// Route::get("/categories", [CategoryController::class, 'index']);
// Route::get("/categories/{id}", [CategoryController::class, 'show']);
// Route::post("/categories", [CategoryController::class, 'store']);
// Route::put("/categories/{id}", [CategoryController::class, 'update']);
// Route::delete("/categories/{id}", [CategoryController::class, 'destroy']);

Route::apiResource("categories", CategoryController::class);


Orion::resource('products', ProductController::class);

Route::apiResource("sales", SaleController::class)
    ->only(["index", "store", "show"]);