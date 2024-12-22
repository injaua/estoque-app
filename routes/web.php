<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});


//Produto routes
Route::resource('produtos', ProdutoController::class);

