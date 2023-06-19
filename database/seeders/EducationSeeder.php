<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educations = [
            'Среднее профессиональное',
            'Среднее специальное',
            'Бакалавр',
            'Специалист',
            'Магистр',
        ];

        foreach ($educations as $education){
            Education::create([
                'name' => $education
            ]);
        }
    }
}
