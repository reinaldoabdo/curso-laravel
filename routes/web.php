<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function () {
//     return view('empresa');
// });
// Route::view('/empresa2', '/empresa');

// Route::get('/produto/{id}', function ($id) {
//     return 'O id do produto é: ' . $id;
//     //return view('produto');
// });

// Route::get('/', [ProdutoController::class, 'index']);


Route::resource('produtos', ProdutoController::class);
