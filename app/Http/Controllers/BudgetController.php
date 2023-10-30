<?php

namespace App\Http\Controllers;
use App\Models\Resident;
use Carbon\Carbon;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function reset()
    {
        $yearlyResetDate = Carbon::now()->startOfYear(); // Get the start of the current year

        $activeResidents = Resident::whereHas('budget', function ($query) use ($yearlyResetDate) {
            $query->whereDate('created_at', '<', $yearlyResetDate);
        })->get();

        foreach ($activeResidents as $resident) {
            $budget = $resident->budget;
            // Implement your logic to reset the budget for the resident
            // You may set a default budget value or calculate it based on specific criteria
            $budget->update([
                'amount' => 1000, // Example: Reset budget to 1000
            ]);
        }

        return response()->json(['message' => 'Budgets reset successfully']);
    }
}
