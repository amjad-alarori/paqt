<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function getResidentsInUtrecht()
    {
        $residents = Resident::where('city', 'Utrecht')->get();

        return response()->json($residents);
    }
}
