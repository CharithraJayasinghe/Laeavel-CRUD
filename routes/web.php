<?php


use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
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

Route::post('/cart/add', [CartController::class, 'addItem']);

Route::resource('products', ProductController::class);

Route::resource('drivers', DriverController::class);





Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);
