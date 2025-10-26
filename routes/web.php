<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\StatisticsController;

Route::get('/', [PublicController::class, 'home'])->name('home');

// Public routes
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/projects', [PublicController::class, 'projects'])->name('projects');
Route::get('/news', [PublicController::class, 'news'])->name('news');
Route::get('/donate', [PublicController::class, 'donate'])->name('donate');
Route::get('/volunteer', [PublicController::class, 'volunteer'])->name('volunteer');
Route::get('/partners', [PublicController::class, 'partners'])->name('partners');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'showProfileForm'])->name('profile.edit');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Content Management Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        // News
        Route::resource('news', ContentController::class)->parameters(['news' => 'news'])->names([
            'index' => 'news.index',
            'create' => 'news.create',
            'store' => 'news.store',
            'show' => 'news.show',
            'edit' => 'news.edit',
            'update' => 'news.update',
            'destroy' => 'news.destroy',
        ]);

        // Projects
        Route::resource('projects', ContentController::class)->parameters(['projects' => 'project'])->names([
            'index' => 'projects.index',
            'create' => 'projects.create',
            'store' => 'projects.store',
            'show' => 'projects.show',
            'edit' => 'projects.edit',
            'update' => 'projects.update',
            'destroy' => 'projects.destroy',
        ]);

        // Events
        Route::resource('events', ContentController::class)->parameters(['events' => 'event'])->names([
            'index' => 'events.index',
            'create' => 'events.create',
            'store' => 'events.store',
            'show' => 'events.show',
            'edit' => 'events.edit',
            'update' => 'events.update',
            'destroy' => 'events.destroy',
        ]);

        // Media
        Route::resource('media', ContentController::class)->parameters(['media' => 'media'])->names([
            'index' => 'media.index',
            'create' => 'media.create',
            'store' => 'media.store',
            'show' => 'media.show',
            'edit' => 'media.edit',
            'update' => 'media.update',
            'destroy' => 'media.destroy',
        ]);

        // Mission/Vision
        Route::get('mission-vision/edit', [ContentController::class, 'editMissionVision'])->name('mission-vision.edit');
        Route::put('mission-vision', [ContentController::class, 'updateMissionVision'])->name('mission-vision.update');

        // Individual Mission/Vision/Equipe/Histoire routes
        Route::get('mission/edit', [ContentController::class, 'editMission'])->name('mission.edit');
        Route::put('mission', [ContentController::class, 'updateMission'])->name('mission.update');
        Route::get('vision/edit', [ContentController::class, 'editVision'])->name('vision.edit');
        Route::put('vision', [ContentController::class, 'updateVision'])->name('vision.update');
        Route::get('equipe/edit', [ContentController::class, 'editEquipe'])->name('equipe.edit');
        Route::put('equipe', [ContentController::class, 'updateEquipe'])->name('equipe.update');
        Route::get('histoire/edit', [ContentController::class, 'editHistoire'])->name('histoire.edit');
        Route::put('histoire', [ContentController::class, 'updateHistoire'])->name('histoire.update');

        // User Management
        Route::resource('volunteers', UserManagementController::class)->parameters(['volunteers' => 'volunteer'])->names([
            'index' => 'volunteers.index',
            'show' => 'volunteers.show',
            'update' => 'volunteers.update',
            'destroy' => 'volunteers.destroy',
        ])->except(['create', 'store', 'edit']);

        Route::resource('donations', UserManagementController::class)->parameters(['donations' => 'donation'])->names([
            'index' => 'donations.index',
            'show' => 'donations.show',
            'update' => 'donations.update',
            'destroy' => 'donations.destroy',
        ])->except(['create', 'store', 'edit']);

        Route::resource('partners', UserManagementController::class)->parameters(['partners' => 'partner'])->names([
            'index' => 'partners.index',
            'show' => 'partners.show',
            'update' => 'partners.update',
            'destroy' => 'partners.destroy',
        ])->except(['create', 'store', 'edit']);

        // Custom routes for status updates
        Route::put('volunteers/{volunteer}/status', [UserManagementController::class, 'updateVolunteerStatus'])->name('volunteers.update-status');
        Route::put('donations/{donation}/status', [UserManagementController::class, 'updateDonationStatus'])->name('donations.update-status');
        Route::put('partners/{partner}/status', [UserManagementController::class, 'updatePartnerStatus'])->name('partners.update-status');

        // Statistics & Archiving
        Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics.index');
        Route::post('statistics/archive', [StatisticsController::class, 'archive'])->name('statistics.archive');
        Route::get('statistics/export', [StatisticsController::class, 'export'])->name('statistics.export');
    });
});
