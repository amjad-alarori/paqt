<?php

namespace Database\Factories;

use App\Models\Plot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resident>
 */
class ResidentFactory extends Factory
{

    private $plotIds = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (empty($this->plotIds)) {
            $this->plotIds = Plot::pluck('id')->shuffle()->all();
        }

        $plotId = array_shift($this->plotIds);

        return [
            'name' => fake()->name(),
            'city' => 'Utrecht',
            'plot_id' =>  $plotId,
            'created_at' => fake()->dateTimeBetween('-1 year'),
            'updated_at' => fake()->dateTimeBetween('-1 year'),
        ];
    }
}
