<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::group(["prefix" => "Categorys"], function () {

        Route::get("/", [CategoryController::class, "index"])->name("Categorys");
        Route::get("/addCategory", [CategoryController::class, "create"])->name("addCategory");
        Route::post("/Store", [CategoryController::class, "store"])->name("StoreCategory");
        Route::get("/{id}", [CategoryController::class, "show"])->name("Category");
        Route::get("/edit/{id}", [CategoryController::class, "edit"])->name("editCategory");
        Route::put("/edit/{id}", [CategoryController::class, "update"])->name("updateCategory");
        Route::delete("/{id}", [CategoryController::class, "destroy"])->name("destroyCategory");

    });

    Route::group(["prefix" => "Products"], function () {

        Route::get("/", [ProductController::class, "index"])->name("Products");
        Route::get("/create", [ProductController::class, "create"])->name("addProduct");
        Route::get("/{id}", [ProductController::class, "show"])->name("Product");
        Route::get("/edit/{id}", [ProductController::class, "edit"])->name("editProduct");
        Route::put("/update/{id}", [ProductController::class, "update"])->name("UpdateProduct");
        Route::delete("/delete/{id}", [ProductController::class, "destroy"])->name("destroyProduct");
        Route::post("/store", [ProductController::class, "store"])->name("storeProduct");

    });

});
Route::get('/contact', function () {
    return view('Contact');
})->name('contact');

Route::get('/about', function () {
    return view('About');
})->name('About');