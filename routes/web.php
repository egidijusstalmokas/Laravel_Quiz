<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;

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

Auth::routes();

Route::controller(AdminController::class)
    ->middleware('auth')
    ->prefix('desk')
    ->group(function () {
        Route::get('/', 'desk')->name('desk');
    Route::controller(SettingsController::class)->prefix('settings')->name('settings.')->group(function () {
        Route::get('/', 'main')->name('main');
        Route::get('/info', 'info')->name('info');
        Route::post('/updateInfo', 'updateInfo')->name('updateInfo');
        Route::get('/logo', 'logo')->name('logo');
        Route::post('/updateLogo', 'updateLogo')->name('updateLogo');
        Route::get('/editImages', 'editImages')->name('editImages');
        Route::post('storeImages', 'storeImages')->name('storeImages');
        Route::get('/destroyImage/{quizImage}', 'destroyImage')->name('destroyImage');
    });
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
