<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MonumentController;
use App\Http\Controllers\OrganizerController;
use App\Models\Monument;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/organizer', [OrganizerController::class, 'index'])->name('dashboard.organizer');
Route::get('/admin', function () {
    return view('dashboard.admin');
});

Route::get('/create/category', [CategoryController::class, 'index'])->name('dashboard.category');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/manage/events', function () {
    return view('dashboard-views.manage-events');
});
Route::get('/admin/manage/events', [EventController::class, 'index']);
Route::get('/create/event', function () {
    return view('dashboard-views.create-event');
});
Route::get('/create/monument', [MonumentController::class, 'create']);

Route::post('/create/event', [EventController::class, 'store'])->name('create-event');
Route::post('/create/monument', [MonumentController::class, 'store'])->name('create-monument');
Route::post('/create/category', [CategoryController::class, 'store'])->name('create-category');

// see the monuments
Route::get('/monument', [MonumentController::class, 'index']);

// update the events by admin
Route::get('/events/{event}/review', [EventController::class, 'review'])
    ->name('events.review');
Route::put('/events/{event}/review', [EventController::class, 'update'])
    ->name('events.update');
Route::put('/events/{event}/review', [EventController::class, 'updateStatus'])
    ->name('events.update.status');