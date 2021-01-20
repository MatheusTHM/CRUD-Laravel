<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::resource('/books', BookController::class)->names([
    'create' => 'cadastrar', //tipo da rota => nome pra rota
    'index' => 'books'
]);

Route::get('/', function () {
    return redirect()->route('books');
});

Route::get('/add', function () {
    return redirect()->route('cadastrar');
});