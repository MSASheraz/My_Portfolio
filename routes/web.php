<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardRedirectController;
use Illuminate\Support\Facades\Route;


// ==========================================
// PUBLIC FRONTEND SITES
// ==========================================
Route::get('/', [PortfolioController::class, 'laynding'])->name('site.laynding');
Route::get('/about', [PortfolioController::class, 'about'])->name('site.about');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('site.portfolio');
Route::get('/contact-us', [PortfolioController::class, 'contactUs'])->name('site.contact-us');
Route::get('/services', [PortfolioController::class, 'services'])->name('site.services');


// ==========================================
// PUBLIC CONTACT FORM SUBMISSION
// ==========================================
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');


// ==========================================
// DASHBOARD REDIRECT
// ==========================================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardRedirectController::class)
        ->name('dashboard');
});


// ==========================================
// ADMIN DASHBOARD PIPELINE
// AUTH + EMAIL VERIFIED REQUIRED
// ==========================================
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Core Dashboard
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])
            ->name('dashboard');


        // ==========================================
        // PROJECTS
        // ==========================================
        Route::get('/projects', [AdminController::class, 'adminProject'])
            ->name('projects');

        Route::get('/projects/create', [AdminController::class, 'adminProjectCreate'])
            ->name('projects.create');

        Route::get('/projects/show', [AdminController::class, 'adminProjectShow'])
            ->name('projects.show');


        // ==========================================
        // BLOGS
        // ==========================================
        Route::get('/blogs', [AdminController::class, 'adminBlog'])
            ->name('blogs');

        Route::get('/blogs/create', [AdminController::class, 'adminBlogCreate'])
            ->name('blogs.create');

        Route::get('/blogs/show', [AdminController::class, 'adminBlogShow'])
            ->name('blogs.show');


        // ==========================================
        // MESSAGES
        // ==========================================
        Route::get('/messages', [AdminController::class, 'adminMessage'])
            ->name('messages');

        Route::get('/messages/show', [AdminController::class, 'adminMessageShow'])
            ->name('messages.show');


        // ==========================================
        // MESSAGE NOTIFICATIONS
        // ==========================================
        Route::get('/message-notifications', [MessageController::class, 'index'])
            ->name('message.notifications');
    });


// ==========================================
// USER PROFILE & AUTH PIPELINE
// ==========================================
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


require __DIR__.'/auth.php';