<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/









Route::get('/',[HomeController::class,'home']);
Route::get('/home',[HomeController::class,'index']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/add_doctor',[AdminController::class,'add']);
Route::post('/upload_doctor',[AdminController::class,'upload']);


Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);


Route::get('/approve_appointment/{id}',[AdminController::class,'approve_appointment']);
Route::get('/cancel_appointment/{id}',[AdminController::class,'cancel_appointment']);

Route::get('/showdoctors',[AdminController::class,'showdoctors']);

Route::get('/update_doc/{id}',[AdminController::class,'update_doc']);
Route::get('/delete_doc/{id}',[AdminController::class,'delete_doc']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);


Route::get('/contact',[ContactController::class,'contact']);

Route::post('/send',[ContactController::class,'send']);