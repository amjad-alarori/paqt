<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'resident_id' => 'required|exists:residents,id',
            'taxi_company_id' => 'required|exists:taxi_companies,id',
            'pickup_location' => 'required',
            'destination' => 'required',
        ]);

        $booking = new Booking();
        $booking->resident_id = $request->input('resident_id');
        $booking->taxi_company_id = $request->input('taxi_company_id');
        $booking->pickup_location = $request->input('pickup_location');
        $booking->destination = $request->input('destination');
        $booking->save();

        return response()->json($booking, 201);
    }

}
