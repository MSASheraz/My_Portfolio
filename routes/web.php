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
Route::get('/blogs', [PortfolioController::class, 'blogs'])->name('site.blogs');

// Public Contact Form Submission
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');


// ==========================================
// ADMIN DASHBOARD PIPELINE (MATCHED FOR SIDEBAR)
// ==========================================
Route::get('/dashboard', DashboardRedirectController::class)->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Core Dashboard Layout
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');

    // Projects Grid System (Matches: admin.projects.*)
    Route::get('/projects', [AdminController::class, 'adminProject'])->name('projects');
    Route::get('/projects/create', [AdminController::class, 'adminProjectCreate'])->name('projects.create'); // Fixed dot syntax error
    Route::get('/projects/show', [AdminController::class, 'adminProjectShow'])->name('projects.show');

    // Blogs System (Matches: admin.blogs.*)
    Route::get('/blogs', [AdminController::class, 'adminBlog'])->name('blogs');
    Route::get('/blogs/create', [AdminController::class, 'adminBlogCreate'])->name('blogs.create'); // Fixed dot syntax error
    Route::get('/blogs/show', [AdminController::class, 'adminBlogShow'])->name('blogs.show');

    // Messages/Mail Stream (Matches: admin.messages.*)
    Route::get('/messages', [AdminController::class, 'adminMessage'])->name('messages');
    Route::get('/messages/show', [AdminController::class, 'adminMessageShow'])->name('messages.show');
    
    // Notification Fallback Log
    Route::get('/message-notifications', [MessageController::class, 'index'])->name('message.notifications');
});


// ==========================================
// USER PROFILE & AUTH PIPELINE
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';