<?php

use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about-us','pages.about');
Route::view('/services','pages.service');
Route::view('/contact-us','pages.contact');
Route::view('/track','pages.track');
Route::post('/track', [\App\Http\Controllers\TrackController::class,'track'])->name('track.now');

Route::get('/dashboard', [ShipmentController::class,'stats'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/shipment/download/{id}', [ShipmentController::class,'download'])->name('shipment.print');
Route::resource('/shipment', ShipmentController::class)->names('shipment');
Route::get('/receive',[ShipmentController::class,'receive'])->name('receive.index');
Route::post('/receive',[ShipmentController::class,'storeReceive'])->name('receive.store');

