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
    private $residentIds = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (empty($this->residentIds)) {
            $this->residentIds = Resident::pluck('id')->shuffle()->all();
        }

        $residentId = array_shift($this->residentIds);

        return [
            'resident_id' => $residentId,
            'pickup_location' => fake()->address(),
            'destination' => fake()->address(),
            'created_at' => fake()->dateTimeBetween('-1 year'),
            'updated_at' => fake()->dateTimeBetween('-1 year'),
        ];
    }
}
