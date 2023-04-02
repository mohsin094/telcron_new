<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\NavItemController;
use App\Http\Controllers\LabReservationController;

Auth::routes([
    'register' => false, // Registration Routes...
    'login' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// home page
Route::get('/', [IndexController::class, 'index'])->name('home');

// login, logout, register
// Route::get('/login-user', 'App\Http\Controllers\LoginRegisterController@index');
Route::get('/login-user', [LoginRegisterController::class, 'index']);
Route::get('/login-business', [LoginRegisterController::class, 'indexBusiness'])->name('businessLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout']);
Route::post('/login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('/register', [LoginRegisterController::class, 'register'])->name('register');

// contact send mail
Route::post('/sendmail/send', [SendEmailController::class, 'send'])->name('contactSendMail');

// lab reservation
Route::get('/store', [NavItemController::class, 'store'])->name('store');
Route::get('/lab-reservation/booking/step-one', [LabReservationController::class, 'labReservationOne'])->name('labReservationOne');
Route::get('/lab-reservation/booking/step-two', [LabReservationController::class, 'labReservationTwo'])->name('labReservationTwo');
Route::post('/lab-reservation/getLabTypes', [LabReservationController::class, 'getLabTypes'])->name('getTypesAjax');
Route::post('/lab-reservation/booking/step-tree', [LabReservationController::class, 'labReservationTree'])->name('labReservationTwo');
Route::post('/lab-reservation/booking/labReservationAllFormWithPayment', [LabReservationController::class, 'labReservationAllFormWithPayment'])->name('labReservationAllFormWithPayment');
Route::post('/lab-reservation/booking/step-one-ajax', [LabReservationController::class, 'labReservationOneAjax'])->name('labReservationOneAjax');
Route::post('/lab-reservation/booking/payment', [LabReservationController::class, 'payment'])->name('labReservationPayment');
Route::resource('/LabReservation', LabReservationController::class);

// product-include
Route::get('/product-include/mobility-service', [NavItemController::class, 'mobilityServices'])->name('product_include.mobility_service');
Route::get('/product-include/mobility-service/business-messaging', [NavItemController::class, 'businessMessaging'])->name('product_include.mobility_service.business_messaging');
Route::get('/product-include/mobility-service/business-messaging/telcron-business-messaging', [NavItemController::class, 'telcronBusinessMessaging'])->name('product_include.mobility_service.business_messaging.telcron_business_messaging');

// services
Route::get('/services/eSource', [NavItemController::class, 'eSource'])->name('services.eSource');
Route::get('/services/consulting', [NavItemController::class, 'consulting'])->name('services.consulting');
Route::get('/services/compliance-management', [NavItemController::class, 'complianceManagement'])->name('services.compliance_management');
//services-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/services/resources/emc', 'App\Http\Controllers\NavItemController@emc')->name('services.resources.emc');
Route::get('/services/resources/product-safety', 'App\Http\Controllers\NavItemController@productSafety')->name('services.resources.product_safety');
Route::get('/services/resources/rf-exposure', 'App\Http\Controllers\NavItemController@rfExposure')->name('services.resources.rf_exposure');
Route::get('/services/resources/reference-link', 'App\Http\Controllers\NavItemController@referenceLink')->name('services.resources.reference_link');
Route::get('/services/resources/products', 'App\Http\Controllers\NavItemController@products')->name('services.resources.products');

//about---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/about/our-partners', 'App\Http\Controllers\NavItemController@ourPartners')->name('about.our_partners');
Route::get('/about/our-capabilities', 'App\Http\Controllers\NavItemController@ourCapabilities')->name('about.our_capabilities');
Route::get('/about/our-team', 'App\Http\Controllers\NavItemController@ourTeam')->name('about.our_team');
Route::get('/about/blog', 'App\Http\Controllers\NavItemController@blog')->name('about.blog');
Route::get('/about/blog/SamuelJames', 'App\Http\Controllers\NavItemController@blogSamuelJames')->name('about.blog.samuel_james');

//lab-reservation---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/lab-reservation/schedule-testing', 'App\Http\Controllers\NavItemController@scheduleTesting')->name('lab_reservation.schedule_testing');