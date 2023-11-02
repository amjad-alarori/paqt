<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\TaxiCompany;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/bookings/{taxiCompany}",
     *     summary="Get all bookings by taxi company",
     *     @OA\Response(response=200, description="List of bookings"),
     * )
     */
    public function getBookingsByTaxiCompany(TaxiCompany $taxiCompany)
    {
        $plotId = $taxiCompany->plot_id;

        $bookings = Booking::filterByPlotId($plotId)->get();
    
        return response()->json($bookings);
    }

    /**
     * @OA\POST(
     *     path="/api/bookings",
     *     summary="Make a new booking",
     *     @OA\Response(response=200, description="New booking"),
     * )
     */
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
