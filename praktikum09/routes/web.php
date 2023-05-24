<?php

use App\Http\Controllers\Form_skill;
use App\Http\Controllers\FormController;

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
    return view('welcome');
});

//buat ruting sendiri
Route::get('/kabar', function () {
    return view('kondisi');
});
Route::get('/nilai', function () {
    return view('nilai');
});
Route::get('/pasien', function () {
    return view('pasien');
});

// Route form
Route::get('/form', [
    FormController::class, 'index'
]);
// Route hasil
Route::post('/hasil', [
    FormController::class, 'hasil'
]);

Route::get('/skill', [
    Form_skill::class, 'index'
]);
// Route hasil
Route::post('/hasil_skill', [
    Form_skill::class, 'hasil_skill'
]);
