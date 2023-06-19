<?php

namespace Database\Seeders;

use App\Models\Audience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audiences = [
            [
                '238 каб.',
                '1'
            ],
            [
                '4 каб.',
                '2'
            ],
        ];

        foreach ($audiences as $audience){
            Audience::create([
                'name' => $audience[0],
                'address_id' => $audience[1],
            ]);
        }
    }
}
