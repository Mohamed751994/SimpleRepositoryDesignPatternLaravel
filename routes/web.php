<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
