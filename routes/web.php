<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/acheter-propriete', [App\Http\Controllers\HomeController::class, 'acheter'])->name('acheter');
Route::get('/louer-propriete', [App\Http\Controllers\HomeController::class, 'louer'])->name('louer');
Route::get('/a-propos', [App\Http\Controllers\HomeController::class, 'apropos'])->name('apropos');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/détails-immobilier', [App\Http\Controllers\AppartementController::class, 'Details'])->name('détails-immobilier');
Route::get('/admin-creer-vente', [App\Http\Controllers\AdminControllerController::class, 'admin'])->name('admin-creer-vente');
Route::get('/admin-creer-location', [App\Http\Controllers\AdminControllerController::class, 'admin_loc'])->name('admin-creer-location');

Route::get('/admin-vente-list', [App\Http\Controllers\AdminControllerController::class, 'admin_vente_list'])->name('admin-vente-list');
Route::get('/admin-location-list', [App\Http\Controllers\AdminControllerController::class, 'admin_location_list'])->name('admin-location-list');



Route::get('/admin-espace', [App\Http\Controllers\AdminControllerController::class, 'dash'])->name('admin-espace');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
