<?php

use App\Http\Controllers\Streaming;
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
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });

    Route::get('/monitoring', function () {
        return view('admin.livemonitoring.monitoring');
    })->name('monitoring');

    Route::get('/dashbordmonitoring', function () {
        return view('admin.dasbordmonitoring.dasbordmonitoring');
    })->name('dasbordmonitoring');

    // Route::get('/start-streaming', [Streaming::class, 'startStreaming'])->name('start.streaming');
    // Route::get('/start-streaming', [StreamingController::class, 'startStreaming'])->name('start.streaming');

});