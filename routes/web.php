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
    return view('home');
});
Route::view('/login', 'login.index');
Route::view('/register', 'registration.index');
Route::view('/profile/edit', 'profile.edit')->name('view-edit-profile');
Route::view('/profile/view', 'profile.view')->name('view-view-profile');

Route::view('/moderator/dashboard', 'moderator.dashboard.dashboard')->name('view-moderator-dashboard');
Route::view('/moderator/posts/all', 'moderator.dashboard.posts.all')->name('view-moderator-all-posts');
Route::view('/moderator/posts/create', 'moderator.dashboard.posts.create')->name('view-moderator-create-post');
Route::view('/moderator/website-info', 'moderator.dashboard.websiteinfo')->name('view-moderator-website-info');
Route::view('/moderator/login', 'moderator.auth.login')->name('view-moderator-login');
Route::view('/moderator/register', 'moderator.auth.register')->name('view-moderator-register');
Route::view('/moderator/categories/all', 'moderator.dashboard.categories.all')->name('view-moderator-all-categories');
Route::view('/moderator/categories/create', 'moderator.dashboard.categories.create')->name('view-moderator-create-category');
Route::view('/moderator/roles', 'moderator.dashboard.roles')->name('view-moderator-roles');
Route::view('/moderator/users/all', 'moderator.dashboard.users.all')->name('view-moderator-all-users');
Route::view('/moderator/privacy-policy', 'moderator.dashboard.privacypolicy')->name('view-moderator-privacy-policy');
