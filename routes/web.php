<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\User\UserController;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class,'index'])->name('front');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/login', [AdminController::class,'index'])->name('index');

    Route::post('login/proses', [AdminController::class,'login'])->name('login');
    // Route::get('/register',[AdminController::class,'show'])->name('show');
    // Route::post('register/proses', [AdminController::class,'register'])->name('register');
    Route::get('/logout', [AdminController::class,'logout'])->name('logout');

    Route::middleware(['auth','role:admin'])->group(function(){
        Route::get('/dashboard', function(){
          return view('pages.admin.dashboard.index');
        })->name('admin.dashboard');
      });

      // Route::resource('article', ArticleController::class);

      Route::get('/article' , [ArticleController::class,'index'])->name('article.index');

      Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
      
      Route::post('/articles/create/proses', [ArticleController::class,'store'])->name('article.store');
      
      Route::get('/articles/edit/{slug}', [ArticleController::class,'edit'])->name('article.edit');
      
      Route::put('/articles/update/{slug}', [ArticleController::class,'update'])->name('article.update');

      Route::get('/articles/{id}', [ArticleController::class,'show'])->name('article.show');

      Route::delete('/articles/delete/{id}', [DocumentController::class, 'destroy'])->name('article.delete');

      // document

      Route::resource('/document',DocumentController::class);

      // Route::get('/document' , [DocumentController::class,'index'])->name('admin.document.index');

      // Route::get('/document/create', [DocumentController::class,'create'])->name('admin.document.create');
      
      // Route::post('documents/create/proses', [DocumentController::class,'store'])->name('admin.document.store');
      
      // Route::get('/documents/edit/{id}', [DocumentController::class,'edit'])->name('admin.document.edit');
      
      // Route::put('/documents/update/{id}', [DocumentController::class,'update'])->name('admin.document.update');

      // Route::get('/documents/{id}', [DocumentController::class,'show'])->name('admin.document.show');

      // Route::delete('/documents/delete/{id}', [DocumentController::class, 'destroy'])->name('admin.document.delete');
    });
    
Route::prefix('/user')->name('user.')->group(function(){

    Route::get('/verification', [UserController::class, 'verifyEmail'])->name('verification');
    Route::post('/verification/resend-email-verification', [UserController::class, 'resendEmailVerification'])->name('resend-email-verification');

    Route::get('/verification/success/{token}', [UserController::class, 'verifyEmailProcess'])->name('verification.process');

    Route::get('/login', [UserController::class,'index'])->name('index');

    Route::post('login/proses', [UserController::class,'login'])->name('login');

    Route::get('/register',[UserController::class,'show'])->name('show');

    Route::post('register/proses', [UserController::class,'register'])->name('register.proses');

    Route::get('/logout', [UserController::class,'logout'])->name('logout');

    Route::middleware(['profile','role:user'])->group(function(){
        Route::get('/profile', function(){
          return view('front.profile');
        })->name('profile');
      });
});

