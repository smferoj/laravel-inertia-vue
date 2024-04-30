<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [SiteController::class, 'Index'])->name('Index');
Route::get('/Page1', [SiteController::class, 'Page1'])->name('Page1');
