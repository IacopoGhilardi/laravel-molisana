<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = config('pasta');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $item) {
        $item["id"] = $key;
        if ($item["tipo"] == "lunga"){
            $lunga[] = $item;
        } else $item["tipo"] == "corta" ? $corta[] = $item : $cortissima[] = $item;
    }

    return view('home', [
        "lunga" => $lunga,
        "corta" => $corta,
        "cortissima" => $cortissima
    ]);
})->name('home');

Route::get('/product/{id}', function ($id) {
    $data = config('pasta');

    return view('products', [
        "id" => $data[$id]
    ]);
})->name('prodotto');