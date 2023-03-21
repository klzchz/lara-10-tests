<?php

use  Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{SupportController};


Route::get('/supports',[SupportController::class,'index'])->name('supports.index');
Route::get('/',fn() =>  view('welcome'));
Route::get('/contact',[SiteController::class,'contact']);