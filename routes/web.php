<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produtos');
});

Route::get('/produtos', [ ProdutoController::class, "index" ]);
Route::get('/produtos/create', [ ProdutoController::class, "create"]);
Route::post('/produtos', [ ProdutoController::class, "store"]);