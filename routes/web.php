<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\commentController;
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
Route::get('/logout', [LogoutController::class,'index'])->name('logout.index');

//------------REGISTRATION SECTION-------------//
Route::get('/registration', [RegistrationController::class,'index'])->name('registration.index');
Route::get('/student/registration', [RegistrationController::class,'studentindex'])->name('student.registration.index');
Route::get('/instructor/registration', [RegistrationController::class,'instructorindex'])->name('instructor.registration.index');
Route::get('/moderator/registration', [RegistrationController::class,'moderatorindex'])->name('moderator.registration.index');
Route::post('/student/registration', [RegistrationController::class,'studentverify'])->name('student.registration.verify');
Route::post('/instructor/registration', [RegistrationController::class,'instructorverify'])->name('instructor.registration.verify');
Route::post('/moderator/registration', [RegistrationController::class,'moderatorverify'])->name('moderator.registration.verify');

//------------PROFILE SECTION-------------//
Route::get('/profile/{uname}', [UserController::class,'view'])->name('profile.view');
Route::get('/profile/info/edit', [UserController::class,'edit'])->name('profile.edit');

//------------MSG SECTION-------------// Later
Route::get('/{uname}/msg', [MsgController::class,'index'])->name('msg.view');

//------------POST SECTION-------------//
Route::get('/posts', [PostController::class,'viewall'])->name('posts.view.all');
Route::get('/posts/create', [PostController::class,'createview'])->name('posts.create.view');
Route::post('/posts/create', [PostController::class,'create'])->name('posts.create.save');
//Route::post('/posts/create/edit', [PostController::class,'edit'])->name('posts.edit.save');
Route::get('/posts/{subcat}', [PostController::class,'catwiseview'])->name('posts.view.cat');
Route::get('/posts/{subcat}/{id}', [PostController::class,'singleview'])->name('posts.view.single');
// Route::post('/', [PostController::class,'update'])->name('posts.update');
Route::get('/posts/{subcat}/{id}/edit', [PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/{id}/delete', [PostController::class,'delete'])->name('posts.delete');
Route::post('/posts/{subcat}/{id}/edit', [PostController::class,'update'])->name('posts.update');
Route::post('/posts/{subcat}/{id}', [commentController::class,'insertComment'])->name('comment.add');

//------------ADMIN SECTION-------------//
Route::get('/admin', [AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin/website-info', [AdminController::class,'webinfo'])->name('admin.web.info');
Route::get('/admin/categories', [AdminController::class,'categories'])->name('admin.categories');
Route::get('/admin/categories/create', [AdminController::class,'categoriescreate'])->name('admin.categories.create');
Route::get('/admin/sub-categories', [AdminController::class,'subcategories'])->name('admin.sub.categories');
Route::get('/admin/sub-categories/create', [AdminController::class,'subcategoriescreate'])->name('admin.sub.categories.create');
Route::get('/admin/users', [AdminController::class,'users'])->name('admin.users');
Route::get('/admin/moderator/request', [AdminController::class,'moderatorreq'])->name('admin.mod.req');
Route::get('/admin/roles', [AdminController::class,'roles'])->name('admin.roles');
Route::get('/admin/instructor/request', [AdminController::class,'instructorreq'])->name('admin.ins.req');

//------------MODERATOR SECTION-------------//
Route::get('/moderator', [ModeratorController::class,'index'])->name('moderator.dashboard');
Route::get('/moderator/sub-categories', [ModeratorController::class,'subcategories'])->name('moderator.sub.categories');
Route::get('/moderator/sub-categories/create', [ModeratorController::class,'subcategoriescreate'])->name('moderator.sub.categories.create');
Route::get('/moderator/users', [ModeratorController::class,'users'])->name('moderator.users');
// Route::get('/moderator/edit/{uname}', [ModeratorController::class,'useredit'])->name('moderator.user.edit');
Route::get('/moderator/instructor/request', [ModeratorController::class,'instructorreq'])->name('moderator.mod.req');

//------------INSTRUCTOR SECTION-------------//
Route::get('/instructor', [InstructorController::class,'index'])->name('instructor.dashboard');
Route::get('/instructor/group/{gid}', [InstructorController::class,'groups'])->name('instructor.groups');
Route::get('/instructor/group/create', [InstructorController::class,'groupcreate'])->name('instructor.groups.create');

//------------STUDENT SECTION-------------//
Route::get('/student', [StudentController::class,'index'])->name('student.dashboard');
Route::get('/student/group/{gid}', [StudentController::class,'groups'])->name('student.groups');
