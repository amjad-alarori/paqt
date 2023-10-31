<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/residents",
     *     summary="Get all residents by taxi company",
     *     @OA\Response(response=200, description="List of residents"),
     * )
     */
    public function getResidents()
    {
        $residents = Resident::where('city', 'Utrecht')->get();

        return response()->json($residents);
    }
}
