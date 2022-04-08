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
    return view('dashboard');
})->name('dashboard');

Route::view('about-us', 'about-us')->name('about-us');

Route::resource('images', \App\Http\Controllers\ImageController::class)->only('index', 'create', 'store');

Route::resource('message', \App\Http\Controllers\MessageController::class)->only('index', 'create', 'store');

//File views
Route::get('/public/{filename}', function ($filename = '') {
    $path = storage_path('app/public/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    return response()->file($path);
});

require __DIR__.'/auth.php';
