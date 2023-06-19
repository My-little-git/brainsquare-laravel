<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'Математика (базовая)',
                'CDE4FF'
            ],
            [
                'Математика (профильная)',
                'CDE4FF'
            ],
            [
                'Информатика',
                'CBF9FF'
            ],
            [
                'Английский язык',
                'FFD1CE'
            ],
            [
                'Биология',
                'D1FFCA'
            ],
            [
                'География',
                'FFF4CD'
            ],
            [
                'История',
                'FFE4CC'
            ],
            [
                'Литература',
                'FFD7CB'
            ],
            [
                'Обществознание',
                'C9F4DF'
            ],
            [
                'Русский язык',
                'E9CDFF'
            ],
            [
                'Физика',
                'CCD4FF'
            ],
        ];

        foreach ($subjects as $subject){
            Subject::create([
                'name' => $subject[0],
                'color' => $subject[1]
            ]);
        }
    }
}
