<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

//------------LOGIN SECTION-------------//
Route::get('/login', [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'verify'])->name('login.verify');

//------------REGISTRATION SECTION-------------//
Route::get('/registration', [RegistrationController::class,'index'])->name('registration.index');
Route::post('/registration', [RegistrationController::class,'verify'])->name('registration.verify');

//------------PROFILE SECTION-------------//
Route::get('/profile/{uname}', [UserController::class,'view'])->name('profile.view');
Route::get('/profile/{uname}/edit', [UserController::class,'edit'])->name('profile.edit');

//------------POST SECTION-------------//
Route::get('/posts', [PostController::class,'viewall'])->name('posts.view.all');
Route::get('/posts/{sub-cat}', [PostController::class,'catwiseview'])->name('posts.view.cat');
Route::get('/posts/{sub-cat}/{id}', [PostController::class,'singleview'])->name('posts.view.single');
Route::get('/posts/{sub-cat}/{id}/edit', [PostController::class,'edit'])->name('posts.edit');

//------------ADMIN SECTION-------------//
Route::get('/admin', [AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin/posts', [AdminController::class,'posts'])->name('admin.posts');
Route::get('/admin/posts/create', [AdminController::class,'postscreate'])->name('admin.posts.create');
Route::get('/admin/website-info', [AdminController::class,'webinfo'])->name('admin.web.info');
Route::get('/admin/categories', [AdminController::class,'categories'])->name('admin.categories');
Route::get('/admin/categories/create', [AdminController::class,'categoriescreate'])->name('admin.categories.create');
Route::get('/admin/users', [AdminController::class,'users'])->name('admin.users');
Route::get('/admin/{uname}/edit', [AdminController::class,'useredit'])->name('admin.user.edit');
Route::get('/admin/roles', [AdminController::class,'roles'])->name('admin.roles');
