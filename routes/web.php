<?php

use App\Http\Controllers\ContactForm;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/counter',[CounterController::class,'index'])->name('counter.index');
Route::get('/crud',[CrudController::class,'index'])->name('crud.index');
Route::get('/contact-form',[ContactForm::class,'index'])->name('contact_form.index');
