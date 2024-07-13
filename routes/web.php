<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DocumentControlller;
use App\Http\Controllers\EventControlller;
use App\Http\Controllers\LandController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WedController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'About');
Route::view('/Dashboard', 'DashBoard');
Route::get('/Contact', function () {
    return view("Contact");
});
Route::resource('customer',CustomerController::class)->names('customer');
Route::get('/viewing', [CustomerController::class,'index'])->name('View');
Route::get('/Wedding', [WedController::class,'index']);
Route::get('/Landscape', [LandController::class,'index']);
Route::get('/PostPhoto', [PostController::class, 'index']);
Route::get('/event', [EventControlller::class, 'index']);
Route::get('/Document', [DocumentControlller::class,'index']);

