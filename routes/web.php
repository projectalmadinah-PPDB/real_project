<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front.index');
})->name('front');

Route::get('/profile',function(){
    return view('front.profile');
})->name('profile');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/login', [AdminController::class,'index'])->name('index');

    Route::post('login/proses', [AdminController::class,'login'])->name('login');
    // Route::get('/register',[AdminController::class,'show'])->name('show');
    // Route::post('register/proses', [AdminController::class,'register'])->name('register');
    Route::get('/logout', [AdminController::class,'logout'])->name('logout');

    Route::middleware(['auth', 'role:admin'])->group(function(){
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

      Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.delete');
    });
    
Route::prefix('/user')->name('user.')->group(function(){
    Route::get('/login', [UserController::class,'index'])->name('index');

    Route::post('login/proses', [UserController::class,'login'])->name('login');

    Route::get('/register',[UserController::class,'show'])->name('show');

    Route::post('register/proses', [UserController::class,'register'])->name('register.proses');

    Route::get('/logout', [UserController::class,'logout'])->name('logout');

    Route::middleware(['profile', 'role:user'])->group(function(){
        Route::get('/profile', function(){
          return view('front.profile');
        })->name('profile');
      });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
