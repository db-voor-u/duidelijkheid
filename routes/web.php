<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostMakeController;
use App\Http\Controllers\WelkomController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelkomController::class)->name('welkom');
Route::get('/blog',[PostController::class,'index'])->name('posts.index');
Route::get('/pdf_file/download/{id}', [PostController::class, 'download'])->name('pdf_file.download');
Route::get('/blog{post:slug}',[PostController::class,'show'])->name('posts.show');

Route::get('/powerby',[PostMakeController::class,'index'])->name('makes.build');

Route::get('/powerby{postMake:slug}',[PostMakeController::class,'show'])->name('makes.show');


Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
