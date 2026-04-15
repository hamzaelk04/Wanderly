<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
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

Route::get('/manage/events', function() {
    return view('dashboard-views.manage-events');
});
Route::get('/create/event', function() {
    return view('dashboard-views.create-event');
});

Route::post('/create/event', [EventController::class, 'store'])->name('create-event');