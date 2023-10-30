<?php

use App\Http\Controllers\api\BookingController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\api\ResidentController;
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

Route::namespace('api')->group(function () {
    Route::get('bookings/{taxiCompany}', [BookingController::class, 'getBookingsByTaxiCompany']);
    Route::get('residents', [ResidentController::class, 'getResidentsInUtrecht']);
    Route::post('bookings', [BookingController::class, 'createBooking']);
});

