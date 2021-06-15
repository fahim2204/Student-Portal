<?php

use App\Http\Controllers\LoginController;
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
    return view('home');
});
// Route::get('/login', function () {
//     return view('login.index');
// });
// Route::get('/login', ['uses' => 'LoginController@index']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'Verify']);
Route::get('/registration', function () {
    return view('registration.index');
});

//Route::get('/home', ['as'=>'home.index ','uses'=>'HomeController@index']);
