<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\ProfileSettingController;

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
Route::post('/patient-store' , [AuthController::class , 'patientStore'])->name('patient-store');
Route::get('/doctor-register' , [AuthController::class , 'doctorRegister'])->name('doctor-register');
Route::post('/doctor-store' , [AuthController::class , 'doctorStore'])->name('doctor-store');
Route::post('/auth-login', [AuthController::class, 'authLogin'])->name('auth-login');
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');


//DOCTOR
Route::prefix('doctor')->group(function () {
    Route::get('/dashboard', [DashboardController::class , 'dashboard'])->name('doctor.dashboard');
    Route::get('/profile-setting', [ProfileSettingController::class , 'profileSetting'])->name('doctor.profile-setting');
    Route::get('/experience', [ProfileSettingController::class , 'experience'])->name('doctor.experience');
    Route::get('/education', [ProfileSettingController::class , 'education'])->name('doctor.education');
    Route::get('/award', [ProfileSettingController::class , 'award'])->name('doctor.award');
    Route::get('/insurance', [ProfileSettingController::class , 'insurance'])->name('doctor.insurance');
    Route::get('/clinic', [ProfileSettingController::class , 'clinic'])->name('doctor.clinic');
    Route::get('/hours', [ProfileSettingController::class , 'hours'])->name('doctor.hours');
    Route::get('/requests', [DashboardController::class , 'requests'])->name('doctor.requests');
    Route::get('/appointments', [DashboardController::class , 'appointments'])->name('doctor.appointments');
    Route::get('/appointments-detail', [DashboardController::class , 'appointmentsDetail'])->name('doctor.appointments-detail');
    Route::get('/appointments-start', [DashboardController::class , 'appointmentStart'])->name('doctor.appointments-start');
    Route::get('/my-patients', [DashboardController::class , 'myPatient'])->name('doctor.my-patient');
    Route::get('/patient-profile', [DashboardController::class , 'patientProfile'])->name('doctor.patient-profile');
    Route::get('/services', [DashboardController::class , 'services'])->name('doctor.service');
    Route::get('/reviews', [DashboardController::class , 'reviews'])->name('doctor.reviews');
    Route::get('/account', [DashboardController::class , 'account'])->name('doctor.account');
    Route::get('/invoice', [DashboardController::class , 'invoice'])->name('doctor.invoice');
    Route::get('/payout', [DashboardController::class , 'payout'])->name('doctor.payout');
    Route::get('/social-media', [DashboardController::class , 'socialMedia'])->name('doctor.social-media');
});




Route::post('/send-signal', [CallController::class, 'sendSignal']);

Route::get('/call', function () {
    return view('call');
});
