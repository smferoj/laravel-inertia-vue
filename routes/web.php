<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [SiteController::class, 'Index'])->name('Index');
Route::get('/Page1', [SiteController::class, 'Page1'])->name('Page1');
Route::get('/Page2', [SiteController::class, 'Page2'])->name('Page2');
Route::get('/Page3', [SiteController::class, 'Page3'])->name('Page3');
