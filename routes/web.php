<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;

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

//PAGES
Route::get('/' , [FrontendController::class , 'index'])->name('web.index');
Route::get('/about-us' , [FrontendController::class , 'aboutUs'])->name('about-us');
Route::get('/contact-us' , [FrontendController::class , 'contactUs'])->name('contact-us');
Route::get('/pricing' , [FrontendController::class , 'pricing'])->name('pricing');
Route::get('/faq' , [FrontendController::class , 'faq'])->name('faq');
Route::get('/terms-and-condition' , [FrontendController::class , 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/privacy-policy' , [FrontendController::class , 'privacyPolicy'])->name('privacy-policy');

//AUTH
Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::get('/patient-register' , [AuthController::class , 'patientRegister'])->name('patient-register');
Route::get('/doctor-register' , [AuthController::class , 'doctorRegister'])->name('doctor-register');


Route::post('/send-signal', [CallController::class, 'sendSignal']);

Route::get('/call', function () {
    return view('call');
});
