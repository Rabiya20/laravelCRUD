<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; // this controller is imported for use
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
    return view('insert');
});

    // method used in form      page to route       controller name and its class which we are using
    // for using a contoller, we have to import it at top of this file
Route::post('store',[BlogController::class,'store']);

Route::get('show',[BlogController::class,'show']);

Route::get('delete/{id}',[BlogController::class,'destroy']);

Route::get('edit/{id}',[BlogController::class,'edit']);

Route::post('update/{id}',[BlogController::class,'update']);
