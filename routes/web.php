<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about-us', [SiteController::class, 'aboutUs'])->name('about');
Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::get('/our-team', [SiteController::class, 'ourTeam'])->name('our-team');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts');
Route::get('/projects', [SiteController::class, 'projects'])->name('projects');
Route::get('/safety-and-environment', [SiteController::class, 'safety'])->name('safety');
Route::get('/csr', [SiteController::class, 'csr'])->name('csr');
