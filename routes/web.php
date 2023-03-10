<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizQuestionsController;

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
    return view('front.quiz.index');
})->name('quiz');

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
    Route::controller(QuestionController::class)->prefix('question')->name('question.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('edit/{question}', 'edit')->name('edit');
        Route::post('update/{question}', 'update')->name('update');
        Route::get('/destroy/{question}', 'destroy')->name('destroy');
    });
    });

    Route::controller(QuizController::class)->prefix('quiz')->name('quiz.')->group(function () {
        Route::get('/play', 'play')->name('play');
    });
    Route::controller(QuizQuestionsController::class)->prefix('quizQuestion')->name('quizQuestion.')->group(function () {
        Route::get('/', 'question')->name('question'); 
        Route::get('/nextQuestion/{quizQuestion}/{questionNumber}/{value}', 'nextQuestion')->name('nextQuestion');
        Route::get('/resultQuestion/{quizQuestion}/{questionNumber}/{value}', 'resultQuestion')->name('resultQuestion');
    });