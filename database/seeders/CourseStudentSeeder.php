<?php

namespace Database\Seeders;

use App\Models\CourseStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_student = [
            [
                'student_id' => '1',
                'course_id' => '1'
            ],
            [
                'student_id' => '1',
                'course_id' => '2'
            ],
        ];

        foreach ($course_student as $item){
            CourseStudent::create($item);
        }
    }
}
