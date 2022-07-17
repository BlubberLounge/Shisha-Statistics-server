<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Classes\Utillity;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shisha>
 */
class ShishaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->unique()->uuid(),
            'name' => $this->randomShishaName(),
            'description' => $this->faker->sentence(mt_rand(5, 20)),
            'last_seen' => now(),
        ];
    }

    /**
     * 
     */
    private function randomShishaName()
    {
        $shishaOwner = Utillity::getRandomWeightedElement(
            [
                'Max' => 9,
                'Noah' => 12,
                'Kevin' => 13,
                'Tim' => 1,
                'Patrick' => 15,
                $this->faker->unique()->firstName() => 50,
            ]
        );

        $shishaNames = [
            'Shisha',
            'Rauchgerät',
            'Saugstauber',
        ];

        $posessiveNoun = function(string $noun)
        {
            return $noun . '\'s';
        };

        return $this->faker->boolean(75)
            ? $posessiveNoun($shishaOwner) .' '. $shishaNames[mt_rand(0, sizeOf($shishaNames)-1)]
            : $shishaNames[mt_rand(0, sizeOf($shishaNames)-1)];
    }
}
