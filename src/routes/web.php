<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Justsaimain\Ngapyin\Http\Controllers\AdminLoginController;
use Justsaimain\Ngapyin\Http\Controllers\Backend\PageController;


Route::group(['middleware' => ['web']], function () {
    Route::get('admin', function () {
        return 'this is from package';
    });


    Route::get('/backend/login', [AdminLoginController::class, 'showLoginForm']);
    Route::post('/backend/login', [AdminLoginController::class, 'login'])->name('backend.login');

    Route::middleware(['auth:admin'])->prefix('backend')->namespace('Backend')->name('backend.')->group(function () {
        Route::get('/', [PageController::class, 'index']);
    });
});
