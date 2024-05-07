<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\ContactusController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\SendMessageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\WhoweareController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\SocialMediaController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\WebDevelopmentController;
use App\Http\Controllers\Backend\AppDevelopmentController;



Route::get('/', [HomeController::class, 'index'])->name('index.homepage');

Auth::routes();


Route::get('/home', function (){
    return redirect()->route('dashboard');
});

Route::prefix('admin')->group(function (){

    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Dashboard Logout
    Route::get('/dashboard/logout', [DashboardController::class, 'dashboardLogout'])->name('dashboard.logout');

    // Company Routes
    Route::resource('company', CompanyController::class);

    // Contact Us Route
    Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus.index');
    Route::put('/contactus/update', [ContactusController::class, 'contactusUpdate'])->name('contactus.update');
    // Message Routes
    Route::resource('/message', MessageController::class);

    // Who We Are Route
    Route::get('/who-we-are', [WhoweareController::class, 'index'])->name('whoweare.index');
    Route::put('/who-we-are/update', [WhoweareController::class, 'updateWhoWeAre'])->name('whoweare.update');

    // Service Route
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::put('/service/update', [ServiceController::class, 'updateService'])->name('service.update');

    // Team Route
    Route::resource('/team', TeamController::class);

    // Social Media Route
    Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social.media');
    Route::put('/social-media', [SocialMediaController::class, 'update'])->name('social.update');

    // Clients Route
    Route::resource('/client', ClientController::class);

    // Portfolio Route [Web Development]
    Route::resource('/portfolio/web-development', WebDevelopmentController::class);
    // Portfolio Route [App Development]
    Route::resource('/portfolio/app-development', AppDevelopmentController::class);

});


// Frontend Routes
Route::post('/usersendmessage', [SendMessageController::class, 'sendMessage'])->name('send.message');


// Clear Cache
Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    return 'true';
});


