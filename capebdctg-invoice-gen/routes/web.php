<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\participantController;
//use App\Http\Controllers\createProfileController;
//use App\Http\Controllers\profileController;
use App\Http\Controllers\addCourseController;
use App\Http\Controllers\invoiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('participant', [participantController::class,'index']);

Route::get('create-profile',[participantController::class,'viewCreateProfile']);

Route::post('created',[participantController::class,'storeParticipant']);

Route::get('profile/{id}',[participantController::class,'showProfile']);

Route::get('add-course/{id}',[addCourseController::class,'index']);

Route::post('add-course/courseAdded/{id}',[addCourseController::class,'storeCourse']);

Route::get('invoice-gen/{id}/{name}',[invoiceController::class,'index']);
