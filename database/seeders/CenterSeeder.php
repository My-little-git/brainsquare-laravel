<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centers = [
            [
                'Триумф',
                'Эжва',
                'просп. Бумажников, 37А'
            ],
            [
                'Антлантида',
                'Сыктывкар',
                'Тентюковская улица, 308'
            ],
        ];

        foreach ($centers as $center){
            Center::create([
                'name' => $center[0],
                'city' => $center[1],
                'address' => $center[2],
            ]);
        }
    }
}
