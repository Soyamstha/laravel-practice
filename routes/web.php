<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\logincontroller;

Route::get('/',[contactcontroller::class,'index'])->name('contact.index');
Route::post('/contact/add',[contactcontroller::class,'store'])->name('contact.add');
Route::get('contact/edit/{id}',[contactcontroller::class,'edit'])->name('contact.edit');
Route::post('contact/update/{id}',[contactcontroller::class,'update'])->name('contact.update');
Route::get('contact/delete/{id}',[contactcontroller::class,'delete'])->name('contact.delete');
Route::get('/dashboard',[dashboardcontroller::class,'index'])->name('dashboard.index');
Route::get('/login',[logincontroller::class,'show'])->name('login.show');
Route::post('/login',[logincontroller::class,'login'])->name('login.post');
Route::get('/logout',[logincontroller::class,'logout'])->name('logout');
