<?php

use App\Http\Controllers\Organizer\DashboardController;
use App\Http\Controllers\Organizer\EventController as OrganizerEventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonumentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Paymenet\PaymentController;
use App\Http\Controllers\Paymenet\StripeWebhookController;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event}/detail', [EventController::class, 'show'])->name('event.detail');


Route::get('/monument', [MonumentController::class, 'index']);
Route::get('/monuments/{event}/detail', [MonumentController::class, 'show'])->name('monument.detail');


Route::get('/tickets/{order}/download', [OrderController::class, 'download'])->name('tickets.download');


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
        Route::get('/admin', [AdminController::class, 'index'])
            ->name('admin.dashboard');

        // categories
        Route::get('/create/category', [CategoryController::class, 'index'])
            ->name('dashboard.category');
        Route::post('/create/category', [CategoryController::class, 'store'])
            ->name('create-category');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])
            ->name('categories.destroy');

        // monuments
        Route::get('/create/monument', [MonumentController::class, 'create']);
        Route::post('/create/monument', [MonumentController::class, 'store'])
            ->name('create-monument');
        Route::delete('/delete/monument/{id}', [MonumentController::class, 'destroy'])
        ->name('monuments.delete');

        // update the events by admin
        Route::put('/events/{event}/review', [EventController::class, 'update'])
            ->name('events.update');
        Route::put('/events/{event}/status', [EventController::class, 'updateStatus'])
            ->name('events.update.status');

        Route::get('/admin/manage/events', [EventController::class, 'indexAdmin'])->name('admin.events');
        Route::get('/admin/manage/monuments', [MonumentController::class, 'manage'])->name('admin.monuments');
    });

    // organizer:
    Route::middleware('role:organizer')->group(function () {
        // Route::get('/organizer', [OrganizerController::class, 'index'])->name('organizer.dashboard');
        Route::get('/organizer', [DashboardController::class, 'index'])->name('organizer.dashboard');

        Route::post('/create/event', [OrganizerEventController::class, 'store'])
            ->name('create-event');
        Route::get('/create/event', function () {
            return view('dashboard-views.organizer.create-event');
        });

        Route::get('/organizer/manage/events', [EventController::class, 'manage'])->name('manage-events');
    });

    Route::middleware('role:organizer,admin')->group(function () {
        Route::delete('/manage/events/{id}', [EventController::class, 'destroy'])->name('events.delete');
        Route::get('/events/{event}/review', [EventController::class, 'review'])
            ->name('events.review');
    });

    Route::middleware('role:client')->group(function () {
        Route::get('/order/history', [OrderController::class, 'index'])->name('order.history');

        Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

        Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
        Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);
        
        Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
        Route::get('/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
    });

});