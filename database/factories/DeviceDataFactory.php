<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeviceData>
 */
class DeviceDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $time = now()->subHours(mt_rand(0, 168));
        $start = $time;
        $end = $time->addMilliseconds(mt_rand(1111, 22222));

        return [
            'uuid' => $this->faker->unique()->uuid(),
            'start' => $start,
            'end' => $end,
        ];
    }
}
