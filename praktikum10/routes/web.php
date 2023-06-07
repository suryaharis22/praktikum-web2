<?php

use App\Http\Controllers\ProdukController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/list_customer', [CustomerController::class, 'list_customer']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/destroy/{id}', [ProdukController::class, 'destroy']);
