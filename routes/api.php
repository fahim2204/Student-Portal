<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//LOGIN
Route::post('/login', [LoginController::class,'apiVerify']);
Route::get('/logout', [LogoutController::class,'apiLogout']);

//POSTS
Route::get('/posts', [PostController::class, 'apiViewAll']);
Route::get('/posts/search/{text}', [PostController::class,'apiViewSearched']);
Route::get('/posts/category/{subcat}', [PostController::class,'apiCatwiseView']);
Route::get('/posts/{id}', [PostController::class,'apiSingleView']);
Route::get('/categories', [CategoryController::class,'apiGetAll']);

//Registration
Route::post('/student/registration', [RegistrationController::class, 'apiStudentVerify']);
Route::post('/instructor/registration', [RegistrationController::class, 'apiInstructorVerify']);
Route::post('/moderator/registration', [RegistrationController::class, 'apiModeratorVerify']);

//Route::post('/posts/create', [PostController::class,'apiAdminCreate']);

Route::group(['middleware' => ['api-general-login', 'web']], function() {    
    Route::post('/posts/create', [PostController::class,'apiAdminCreate']);
    Route::get('/posts/{id}/delete', [PostController::class,'apiDelete']);
    Route::post('/posts/edit', [PostController::class,'apiUpdate']);
    Route::get('/posts/upvote/{post_id}', [VoteController::class, 'apiUpVote'])->name('posts.upvote');
    Route::get('/posts/downvote/{post_id}', [VoteController::class, 'apiDownVote'])->name('posts.downvote');
    Route::post('/posts/comment/{post_id}', [commentController::class, 'apiInsertComment']);

    Route::group(['middleware' => ['api-general-login', 'web', 'api-admin-login']], function() {
        Route::post('/admin/categories/create', [CategoryController::class,'apiCreate']);
        Route::post('/admin/categories/edit', [CategoryController::class, 'apiEdit']);

        Route::get('/admin/users', [UserController::class,'apiGetAll']);
        Route::get('/admin/users/{id}', [UserController::class, 'apiViewUser']);
        Route::delete('/admin/users/delete/{id}', [UserController::class, 'apiDelete']);
        Route::get('/admin/users/ban/{id}', [UserController::class, 'apiBan']);
        Route::get('/admin/users/unban/{id}', [UserController::class, 'apiUnban']);

        Route::get('/admin/moderator/request', [AdminController::class,'apiModeratorRequests']);
        Route::get('/admin/moderator/approve/{id}', [AdminController::class, 'apiApproveModerator']);
        Route::get('/admin/moderator/decline/{id}', [AdminController::class, 'apiDeclineModerator']);
    });
});