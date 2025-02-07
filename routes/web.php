<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

//Route::resource('articles', ArticleController::class);

Route::resource('articles', ArticleController::class);
Route::get('/product', [ProductController::class, 'index']);
Route::match(['get', 'post'], '/product/new', [ProductController::class, 'new']);
Route::match(['get', 'post'], '/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);



//Route::get('/articles', [ArticleController::class, 'index']);
//Route::post('/articles', [ArticleController::class, 'store']);
//Route::get('/articles/{id}', [ArticleController::class, 'show']);
//Route::put('/articles/{id}', [ArticleController::class, 'update']);
//Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
