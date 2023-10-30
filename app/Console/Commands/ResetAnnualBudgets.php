<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Resident;
use App\Models\Budget;

class ResetAnnualBudgets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'budgets:reset-annual';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset annual budgets for residents';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $residents = Resident::all();

        foreach ($residents as $resident) {
            $budget = $resident->budget;

            if ($budget) {
                $lastUpdated = $budget->updated_at;
                $oneYearFromLastUpdate = $lastUpdated->addYear();
                if (Carbon::now() >= $oneYearFromLastUpdate) {
                    $budget->update([
                        'km' => 1000,
                    ]);
                }
            }
        }

        $this->info('Annual budgets have been reset.');
    }
}
