<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Shisha;
use App\Models\Device;
use App\Models\DeviceData;

class ShishaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shisha::factory()
            ->count(mt_rand(5, 13))
            ->has(
                Device::factory()
                    ->count(mt_rand(1, 6))
                    ->has(
                        DeviceData::factory()
                            ->count(mt_rand(33, 133))
                        , 'data'
                    )
            )
            ->create();
    }
}
