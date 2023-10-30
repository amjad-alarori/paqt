<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\TaxiCompany;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getBookingsByTaxiCompany(TaxiCompany $taxiCompany)
    {
        $plotId = $taxiCompany->plot_id;

        $bookings = Booking::whereHas('resident', function ($query) use ($plotId) {
            $query->where('plot_id', $plotId);
        })->get();

        return response()->json($bookings);
    }

    public function createBooking(Request $request)
    {
        $validatedData = $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'pickup_location' => 'required|string',
            'destination' => 'required|string',
        ]);

        $booking = Booking::create($validatedData);

        return response()->json(['message' => 'Booking created successfully', 'booking' => $booking]);
    }
}
