<?php

use App\Http\Controllers\Admin_auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin_auth\NewPasswordController;
use App\Http\Controllers\Admin_auth\PasswordController;
use App\Http\Controllers\Admin_auth\PasswordResetLinkController;
use App\Http\Controllers\Admin_auth\RegisteredUserController;
use App\Http\Controllers\Admin_auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin_auth\VerifyEmailController;
use App\Http\Controllers\Admin_auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin_auth\ConfirmablePasswordController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
