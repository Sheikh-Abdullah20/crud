<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;






Route::get('/',[queryController::class,'getUsers'])->name('home');
// Route::get('/adduser',[queryController::class,'addUsers']);
Route::post('/adduser',[queryController::class,'addUsers'])->name('add.user');
Route::get('/userdetails/{id}',[queryController::class,'userDetails'])->name('view.user');
Route::get('/deleteuser/{id}',[queryController::class,'deleteUser'])->name('delete.user');
Route::get('/truncate',[queryController::class,'truncateUsers'])->name('truncate.users');
Route::get('/updatePage/{id}',[queryController::class,'updatePage'])->name('update.page');
Route::post('/updateUser/{id}',[queryController::class,'updateUser'])->name('update.user');