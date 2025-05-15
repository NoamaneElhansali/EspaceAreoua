<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name("home-page");
Route::get('lang/{locale}', [UserController::class,'lang'])->name('lang.switch');
Route::get("/auth/redirect/google",[UserController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get("/auth/callback/google",[UserController::class, 'handleGoogleCallback']);
Route::post('/user/update-profile', [UserController::class, 'updateProfileFirst'])->name('profile.update');
Route::post('/login',[UserController::class, 'login'])->name('user.login');

Route::middleware(['role:user'])->group(function () {
    Route::get('/demande',[UserController::class, 'demande'])->name('demande-service');
    Route::post('/demande',[UserController::class, 'create_demande'])->name('create-demande-service');
});
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/catalogue',[AdminController::class,'index'])->name('catalogue.admin');
    Route::post('/admin/catalogue/ajoute',[AdminController::class, 'create'])->name('create-catalogue');
    Route::post('/admin/catalogue/update/{catalogue_id}',[AdminController::class, 'update'])->name('update-catalogue');
    Route::delete('/admin/catalogue/delete/{catalogue_id}',[AdminController::class, 'delete'])->name('delete-catalogue');
    Route::get('/admin/demande',[AdminController::class, 'demande'])->name('admin-demande-service');
    Route::get('/demande/{demande_id}/voir',[AdminController::class, 'show_demande'])->name('demande-voir');
});