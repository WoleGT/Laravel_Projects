<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\LandingPageController;



Route::get('/', [LandingPageController::class,'index']);
Route::get('/flights', [FlightsController::class,'index']);
Route::get('/contactus', [ContactUsController::class,'index']);
Route::get('/aboutus', [AboutUsController::class,'index']);
Route::get('/visa', [VisaController::class,'index']);
Route::post('/booking-register-form', [VisaController::class,'store'])->name('booking');