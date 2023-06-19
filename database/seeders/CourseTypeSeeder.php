<?php

namespace Database\Seeders;

use App\Models\CourseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_types = [
            'Группа',
            'Индивидуальные занятия'
        ];

        foreach ($course_types as $type){
            CourseType::create([
                'name' => $type
            ]);
        }
    }
}
