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
\Illuminate\Support\Facades\Auth::loginUsingId(1);
Route::get('documents/{document}', [\App\Http\Controllers\DocumentsController::class, 'show']);
Route::get('/', function () {
    return view('welcome');

    Route::resource('subscriptions', SubscriptionController::class);


});
