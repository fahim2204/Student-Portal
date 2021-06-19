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
Route::view('/admin/dashboard', 'admin.dashboard.dashboard')->name('view-admin-dashboard');
Route::view('/admin/posts/all', 'admin.dashboard.posts.all')->name('view-admin-all-posts');
Route::view('/admin/post/create', 'admin.dashboard.posts.create')->name('view-admin-create-post');
Route::view('/admin/login', 'admin.auth.login')->name('view-admin-login');
Route::view('/admin/register', 'admin.auth.register')->name('view-admin-register');
Route::view('/admin/categories/all', 'admin.dashboard.categories.all')->name('view-admin-all-categories');
Route::view('/admin/categories/create', 'admin.dashboard.categories.create')->name('view-admin-create-category');
Route::view('/admin/roles', 'admin.dashboard.roles')->name('view-admin-roles');
