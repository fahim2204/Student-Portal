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
    return view('welcome');
});
Route::view('/admin/dashboard', 'admin.dashboard.dashboard')->name('admin-dashboard');
Route::view('/admin/posts/all', 'admin.dashboard.posts.all')->name('admin-all-posts');
Route::view('/admin/post/create', 'admin.dashboard.posts.create')->name('admin-create-post');
