<?php


use App\Http\Controllers\BooksController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProductController;
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
Route::get('/test', function () {
    return config("app.env");
});


Route::get('/', function () {
    return view('home');
});



Route::post('/books', [BooksController::class, 'store']);
Route::post('/cars', [DemoController::class, 'store']);



Route::resource('products', ProductController::class);
Route::resource('drivers', DriverController::class);
