<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Classes\Utillity;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->locale('de_DE');

        return [
            'uuid' => $this->faker->unique()->uuid(),
            'name' => $this->randomDeviceName(),
            'description' => $this->faker->sentence(mt_rand(5, 20)),
            'last_seen' => now(),
            'ip_address' => $this->faker->unique()->ipv4(),
            'mac_address' => $this->faker->unique()->macAddress(),
        ];
    }

    /**
     * 
     */
    private function randomDeviceName()
    {
        $hoseOwner = Utillity::getRandomWeightedElement(
            [
                'Max' => 9,
                'Noah' => 12,
                'Kevin' => 13,
                'Tim' => 1,
                'Patrick' => 15,
                $this->faker->unique()->firstName() => 50,
            ]
        );

        $hoseNames = [
            'LongDong',
            'Snake',
            'Snek',
            'Schlauch',
            'Anschluß',
            'Nuckel',
            'Lutscher',
            'Hose',
            'Pipe',
        ];

        $posessiveNoun = function(string $noun)
        {
            return $noun . '\'s';
        };

        return $this->faker->boolean(75)
            ? $posessiveNoun($hoseOwner) .' '. $hoseNames[mt_rand(0, sizeOf($hoseNames)-1)]
            : $hoseNames[mt_rand(0, sizeOf($hoseNames)-1)];
    }
}
