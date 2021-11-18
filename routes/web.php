<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
Route::get('/login',[LoginController::class, 'index']);

Route::post('/login',[LoginController::class, 'setusername']);

use App\Http\Controllers\ListController;
Route::get('/list',[ListController::class, 'index']);

use App\Http\Controllers\LogController;
Route::get('/log',[LogController::class, 'index']);


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
