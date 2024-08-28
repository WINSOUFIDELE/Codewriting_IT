<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ArticleController;

//Route::resource('articles', ArticleController::class);

Route::resource('articles', ArticleController::class);


//Route::get('/articles', [ArticleController::class, 'index']);
//Route::post('/articles', [ArticleController::class, 'store']);
//Route::get('/articles/{id}', [ArticleController::class, 'show']);
//Route::put('/articles/{id}', [ArticleController::class, 'update']);
//Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
