<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\User\UserController;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LolosController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SettingController;

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
        Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
      });

      // Route::resource('article', ArticleController::class);

      Route::get('/article' , [ArticleController::class,'index'])->name('article.index');

      Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
      
      Route::post('/articles/create/proses', [ArticleController::class,'store'])->name('article.store');
      
      Route::get('/articles/edit/{slug}', [ArticleController::class,'edit'])->name('article.edit');
      
      Route::put('/articles/update/{slug}', [ArticleController::class,'update'])->name('article.update');

      Route::get('/articles/{id}', [ArticleController::class,'show'])->name('article.show');

      Route::delete('/articles/delete/{id}', [DocumentController::class, 'destroy'])->name('article.delete');

      Route::get('/biodata',[BiodataController::class,'index'])->name('biodata.index');

      Route::get('/biodata/show/{id}',[BiodataController::class,'show'])->name('biodata.show');

      Route::get('/biodata/document/{id}',[BiodataController::class,'show_document'])->name('biodata.show_document');

      Route::delete('/biodata/delete/{id}',[BiodataController::class,'destroy'])->name('biodata.destroy');

      Route::get('/biodata/create',[BiodataController::class,'create'])->name('biodata.create');

      Route::post('/biodata/process',[BiodataController::class,'store'])->name('biodata.store');

      Route::get('/biodata/edit/{id}',[BiodataController::class,'edit'])->name('biodata.edit');

      Route::put('/biodata/update/{id}',[BiodataController::class,'update'])->name('biodata.update');

      Route::get('/pendaftaran',[PendaftaranController::class,'index'])->name('pendaftaran.index');

      Route::get('/pendaftaran/edit/{id}',[PendaftaranController::class,'edit'])->name('pendaftaran.edit');

      Route::put('/pendaftaran/process/{id}',[PendaftaranController::class,'update'])->name('pendaftaran.update');

      Route::get('/pendaftaran/delete/{id}',[PendaftaranController::class,'destroy'])->name('pendaftaran.destroy');

      Route::get('/lolos',[LolosController::class,'index'])->name('lolos.index');

      Route::get('/lolos/edit/{id}',[LolosController::class,'edit'])->name('lolos.edit');

      Route::put('/lolos/process/{id}',[LolosController::class,'update'])->name('lolos.update');

      Route::delete('/lolos/delete/{id}',[LolosController::class,'destroy'])->name('lolos.destroy');


      Route::post('/pengecekan/{id}',[LolosController::class,'pengecekan'])->name('pengecekan');


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

    Route::get('/informasi',[FrontController::class,'informasi'])->name('informasi');

    Route::get('/detail-informasi/{slug}',[FrontController::class,'detail_informasi'])->name('informasi.detail');

    Route::get('/about-us',[FrontController::class,'about'])->name('about');

    Route::get('/verification', [UserController::class, 'verifyEmail'])->name('verification');
    Route::post('/verification/resend-email-verification', [UserController::class, 'resendEmailVerification'])->name('resend-email-verification');

    Route::get('/verification/success/{token}', [UserController::class, 'verifyEmailProcess'])->name('verification.process');

    Route::get('/login', [UserController::class,'index'])->name('index');

    Route::post('login/proses', [UserController::class,'login'])->name('login');

    Route::get('/register',[UserController::class,'show'])->name('show');

    Route::post('register/proses', [UserController::class,'register'])->name('register.proses');

    Route::get('/logout', [UserController::class,'logout'])->name('logout');

    Route::get('/activication',[UserController::class,'activication'])->name('activication');

    Route::post('/activication/process',[UserController::class,'activication_process'])->name('activication.process');

    Route::middleware(['profile','role:user'])->group(function(){
        Route::get('/profile', function(){
          return view('front.profile');
        })->name('profile');
      });
    Route::middleware('profile')->group(function(){
      Route::post('/kelengkapan/process',[FrontController::class,'kelengkapan'])->name('kelengkapan.process');

      Route::get('/uploads/document', [DocumentController::class,'document'])->name('document.index');

      Route::post('/uploads/document/process', [DocumentController::class,'unggah_document'])->name('document.process');

      Route::get('/edit/profile', [SettingController::class,'index'])->name('setting.index');
      
      Route::post('/edit/profile/process',[SettingController::class,'update'])->name('setting.update');

      Route::get('/edit/profile/change/password',[SettingController::class,'change_password'])->name('setting.change.password');

      Route::post('/edit/profile/change/password/process',[SettingController::class,'change_password_process'])->name('setting.change.password.process');

    });
});

