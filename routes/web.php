<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
///---------------------------------------------------------------////////
////-------------------------User Routes-------------------------///
Route::get('/', [UserController::class, 'welcome']);
Route::get('/user-quiz-list/{id}/{category}', [UserController::class, 'userQuizList']);
Route::get('/start-quiz/{id}/{name}', [UserController::class, 'startQuiz']);

///---------------------------------------------------------------////////
//////---------------------User SignUp Routes-----------------------//////
Route::view('/user-signup', 'user-signup');
Route::post('/user-signup', [UserController::class, 'userSignup']);
Route::get('/user-signup-quiz', [UserController::class, 'startSignupQuiz']);

///---------------------------------------------------------------////////
//////---------------------User Login Routes-----------------------//////
Route::view('/user-login', 'user-login');
Route::post('/user-login', [UserController::class, 'userLogin']);
Route::get('/user-login-quiz', [UserController::class, 'startLoginQuiz']);

//////-------------------------------------------------------------///////
//////---------------------User Logout Route-----------------------//////
Route::get('/user-logout', [UserController::class, 'userLogout']);
 Route::get('/search-quiz', [UserController::class, 'searchQuiz']);
 Route::get('/verify-user/{email}', [UserController::class, 'verifyUser']);
////////////----------------Forgot Password-----------------------/////
Route::view('user-forgot-password','user-forgot-password');
Route::post('/user-forgot-password', [UserController::class, 'userForgotPassword']);
Route::get('/user-forgot-password/{email}', [UserController::class, 'userResetForgotPassword']);
////////////----------------------------------//////////////////////////

////////////----------------Middleware-----------------------/////
Route::middleware("CheckUserAuth")->group(function () {
    Route::get('/user-details', [UserController::class, 'userDetails']);
    //////--------------------Mcqs Routes-----------------------------/////
    Route::get('/mcq/{id}/{name}', [UserController::class, 'mcq']);
    Route::post('/submit-next/{id}', [UserController::class, 'submitAndNext']);
});

///---------------------------------------------------------------////////
////----------------------Admin Routes----------------------------///
Route::view('admin-login', 'admin-login');
Route::post('admin-login', [AdminController::class, 'login']);


Route::middleware("CheckAdminAuth")->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('admin-categories', [AdminController::class, 'categories']);
Route::get('admin-logout', [AdminController::class, 'logout']);
Route::post('add-category', [AdminController::class, 'addCategory']);
Route::get('category/delete/{id}', [AdminController::class, 'deleteCategory']);
Route::get('add-quiz', [AdminController::class, 'addQuiz']);
Route::post('add-mcq', [AdminController::class, 'addMCQs']);
Route::get('end-quiz', [AdminController::class, 'endQuiz']);
Route::get('show-quiz/{id}/{quizName}', [AdminController::class, 'showQuiz']);
Route::get('quiz-list/{id}/{category}', [AdminController::class, 'quizList']);
});
