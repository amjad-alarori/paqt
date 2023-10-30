<?php

namespace Database\Factories;

use App\Models\Resident;
use App\Models\TaxiCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $resident = Resident::inRandomOrder()->first();
        $taxiCompany = TaxiCompany::inRandomOrder()->first();
        return [
            'resident_id' => $resident->id,
            'taxi_company_id' => $taxiCompany->id,
            'pickup_location' => fake()->address(),
            'destination' => fake()->address(),
            'created_at' => fake()->dateTimeBetween('-1 year'),
            'updated_at' => fake()->dateTimeBetween('-1 year'),
        ];
    }
}
