<?php

use App\Http\Controllers\Site\SiteController;
use  Illuminate\Support\Facades\Route;

$route = new Route;


$route ::get('/',fn() =>  view('welcome'));

$route ::get('/contact',[SiteController::class,'contact']);