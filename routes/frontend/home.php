<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PracticeAreasController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ComplianceController;
use App\Http\Controllers\Frontend\FeesController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/light-hero-1', [HomeController::class, 'light_hero_1'])->name('light_hero_1');
Route::get('/light-hero-2', [HomeController::class, 'light_hero_2'])->name('light_hero_2');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact_us/store', [ContactController::class, 'store'])->name('contact_us.store');
// Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('practice-areas', [PracticeAreasController::class, 'index'])->name('practice_areas');
Route::get('practice-areas/civil-litigation', [PracticeAreasController::class, 'civil_litigation'])->name('civil_litigation');
Route::get('practice-areas/contract-disputes', [PracticeAreasController::class, 'contract_disputes'])->name('contract_disputes');
Route::get('practice-areas/debt-recovery', [PracticeAreasController::class, 'debt_recovery'])->name('debt_recovery');
Route::get('practice-areas/drafting-and-document-review', [PracticeAreasController::class, 'drafting'])->name('drafting');
Route::get('practice-areas/employment', [PracticeAreasController::class, 'employment'])->name('employment');
Route::get('practice-areas/immigration', [PracticeAreasController::class, 'immigration'])->name('immigration');
Route::get('practice-areas/landlord-and-tenant', [PracticeAreasController::class, 'landlord'])->name('landlord');
Route::get('about-us', [AboutController::class, 'index'])->name('about');
Route::get('compliance/money-aundering', [ComplianceController::class, 'index'])->name('compliance');
Route::get('compliance/our-complaints-procedures', [ComplianceController::class, 'compliance_2'])->name('compliance_2');
Route::get('fees-and-payments', [FeesController::class, 'index'])->name('fees');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
