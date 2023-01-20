<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HelperTestController;

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

//localization using lang directory
// Route::get('/', function () {
//     return view('local');
// });
// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('local');
// });

//localization with json file
// Route::get('json', function () {
//     return view('json');
// });
// Route::get('json/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('json');
// });

//helper class
// Route::get('helper', [HelperTestController::class, 'checkHelper']);
// Route::get('string', [HomeController::class, 'index']);
// Route::get('array', [HomeController::class, 'arrayHelper']);
// Route::get('global', [HomeController::class, 'global']);


//Trais files
Route::get('traits', [PagesController::class, 'index'])->name('home');
