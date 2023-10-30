<?php

namespace App\Http\Controllers;

use Carbon\CarbonInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MondaysController extends Controller
{
    public function index(Request $request)
    {
        $startDate = Carbon::parse($request->input('start_date'));
        $endDate = Carbon::parse($request->input('end_date'));
        $mondays = [];

        if ($startDate->dayOfWeek !== CarbonInterface::MONDAY) {
            $startDate->next(CarbonInterface::MONDAY);
        }
        while ($startDate->lessThanOrEqualTo($endDate)) {
            $sunday = $startDate->copy()->endOfWeek();
            if ($sunday->lessThanOrEqualTo($endDate)) {
                $mondays[] = [
                    'date' => $startDate->toDateString(),
                    'week_number' => $startDate->weekOfYear,
                ];
            }
            $startDate->next(CarbonInterface::MONDAY);
        }

        return view('mondays', ['mondays' => $mondays]);
    }

}
