<?php

use App\Http\Controllers\HomeController;
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

Route::prefix('front/user')->group(function(){
    Route::get('/purchaes',[HomeController::class,'purchaes'])->name('website.purchaes');
    Route::get('/financial', [HomeController::class, 'financial'])->name('website.financial');
    Route::get('/document', [HomeController::class, 'document'])->name('website.document');
});