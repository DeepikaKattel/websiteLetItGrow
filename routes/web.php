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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::redirect('/', '/welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vision', [App\Http\Controllers\PagesController::class, 'vision'])->name('vision');

Route::get('/contact_us', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::post('/contactStore', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.store');

Route::get('/career', [App\Http\Controllers\PagesController::class, 'career'])->name('career');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])->name('products');

