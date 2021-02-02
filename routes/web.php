<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $products = DB::table('products')->take(3)->get();
    return view('welcome', compact('products'));
});

Route::redirect('/', '/welcome');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vision', [App\Http\Controllers\PagesController::class, 'vision'])->name('vision');
Route::get('/maps', [App\Http\Controllers\PagesController::class, 'maps'])->name('maps');

Route::get('/contact_us', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::post('/contactStore', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.store');

Route::get('/career', [App\Http\Controllers\PagesController::class, 'career'])->name('career');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])->name('products');
Route::get('/team', [App\Http\Controllers\PagesController::class, 'team'])->name('team');
Route::get('/product_features/{id}', [App\Http\Controllers\PagesController::class, 'features'])->name('features');

Route::post('vacancy', [App\Http\Controllers\VacancyController::class, 'store'])->name('vacancy.store');

//Route::resource('adminCareer','App\Http\Controllers\Admin\AdminCareerController');
//Route::get('/adminCareer/destroy/{id}', 'App\Http\Controllers\Admin\AdminCareerController@destroy')->name('c.destroy');

Route::resource('adminProducts','App\Http\Controllers\ProductsController');
Route::get('/adminProducts/destroy/{id}', 'App\Http\Controllers\ProductsController@destroy')->name('p.destroy');

Route::resource('adminProductsFeatures','App\Http\Controllers\ProductsFeaturesController');
Route::get('/adminProductsFeatures/destroy/{id}', 'App\Http\Controllers\ProductsFeaturesController@destroy')->name('pf.destroy');

Route::resource('/users', 'App\Http\Controllers\Admin\UserController');
Route::get('/users/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('u.destroy');

Route::resource('adminAbout','App\Http\Controllers\Admin\AboutController');
Route::get('/adminAbout/destroy/{id}', 'App\Http\Controllers\Admin\AboutController@destroy')->name('a.destroy');

Route::resource('adminVision','App\Http\Controllers\Admin\VisionController');
Route::get('/adminVision/destroy/{id}', 'App\Http\Controllers\Admin\VisionController@destroy')->name('v.destroy');

Route::resource('adminServices','App\Http\Controllers\Admin\ServicesController');
Route::get('/adminServices/destroy/{id}', 'App\Http\Controllers\Admin\ServicesController@destroy')->name('s.destroy');
