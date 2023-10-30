<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\TaxiCompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



    // Get all residents
    Route::get('residents', [ResidentController::class, 'index'])->name('residents');
    // Book a ride for a resident
    Route::post('bookings', [BookingController::class, 'store'])->name('bookings');
    // Get all rides for a taxi company
    Route::get('taxi-companies/{id}/bookings', [TaxiCompanyController::class, 'bookings'])->name('taxi-companies');
    // Reset budget for active residents
    Route::post('budget', [BudgetController::class, 'reset'])->name('budget');

