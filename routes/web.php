<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MonumentController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\Paymenet\PaymentController;
use App\Http\Controllers\Paymenet\StripeWebhookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event}/detail', [EventController::class, 'show'])->name('event.detail');
Route::get('/test', function () {
    return view('dashboard.admin');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister']);
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login');

});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    // admin:
    Route::middleware('role:admin')->group(function () {
        // Route::get('/admin', [AdminController::class, 'index'])
        //     ->name('admin.dashboard');

        // categories
        Route::get('/create/category', [CategoryController::class, 'index'])
            ->name('dashboard.category');
        Route::post('/create/category', [CategoryController::class, 'store'])
            ->name('create-category');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])
            ->name('categories.destroy');

        // monuments
        Route::get('/monument', [MonumentController::class, 'index']);
        Route::get('/create/monument', [MonumentController::class, 'create']);
        Route::post('/create/monument', [MonumentController::class, 'store'])
            ->name('create-monument');

        // update the events by admin
        Route::get('/events/{event}/review', [EventController::class, 'review'])
            ->name('events.review');
        Route::put('/events/{event}/review', [EventController::class, 'update'])
            ->name('events.update');
        Route::put('/events/{event}/status', [EventController::class, 'updateStatus'])
            ->name('events.update.status');

        Route::get('/admin/manage/events', [EventController::class, 'indext']);
    });

    Route::middleware('role:organizer')->group(function () {
        Route::get('/organizer', [OrganizerController::class, 'index'])->name('organizer.dashboard');

        Route::post('/create/event', [EventController::class, 'store'])
            ->name('create-event');
        Route::get('/create/event', function () {
            return view('dashboard-views.create-event');
        });
            
        Route::get('/manage/events', function () {
            return view('dashboard-views.manage-events');
        });
    });

    Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);
});