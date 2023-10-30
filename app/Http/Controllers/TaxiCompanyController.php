<?php

namespace App\Http\Controllers;

use App\Models\TaxiCompany;
use Illuminate\Http\Request;

class TaxiCompanyController extends Controller
{
    public function bookings($id)
    {
        $taxiCompany = TaxiCompany::findOrFail($id);
        $bookings = $taxiCompany->bookings;
        return response()->json($bookings);
    }
}
