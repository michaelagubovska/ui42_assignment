<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchCityController;
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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/city', [SearchCityController::class,'index']);
Route::get('/city/{id}', [SearchCityController::class,'show']);

Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'App\Http\Controllers\AutocompleteSearchController@autocomplete'));
