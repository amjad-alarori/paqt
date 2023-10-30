<?php

namespace Database\Factories;

use App\Models\Resident;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    private $residentIds = [];

    public function definition(): array
    {
        if (empty($this->residentIds)) {
            $this->residentIds = Resident::pluck('id')->shuffle()->all();
        }

        $residentId = array_shift($this->residentIds);

        return [
            'resident_id' => $residentId,
            'km' => 1000,
            'active' => true,
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
