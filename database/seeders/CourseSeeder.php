<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Подготовка к ЕГЭ по профильной математике',
                'subject_id' => 2,
                'course_type_id' => 1,
                'teacher_id' => 1,
                'audience_id' => 1,
                'seats' => 25,
                'lessons' => 20,
                'start_at' => '2023-06-26',
                'end_at' => '2023-08-09',
                'price' => 6000,
                'days' => [1, 3, 5],
                'time' => '10:00'
            ],
            [
                'name' => 'Подготовка к ЕГЭ по английскому языку',
                'subject_id' => 4,
                'course_type_id' => 2,
                'teacher_id' => 2,
                'audience_id' => 2,
                'seats' => 25,
                'lessons' => 25,
                'start_at' => '2023-06-27',
                'end_at' => '2023-09-19',
                'price' => 10000,
                'days' => [2, 4],
                'time' => '16:30'
            ],
        ];

        foreach ($courses as $course){
            $lessons = $course['lessons'];
            $currentDate = Carbon::parse($course['start_at']);
            $days = $course['days'];
            $time = $course['time'];
            $left_lessons = 0;

            unset($course['days']);
            unset($course['time']);

            $course = Course::create($course);

            while ($left_lessons < $lessons){
                if (in_array($currentDate->dayOfWeek, $days)){
                    $left_lessons++;
                    Lesson::create([
                        'course_id' => $course->id,
                        'date' => $currentDate->format('Y-m-d'),
                        'time' => $time
                    ]);
                }
                $currentDate->addDay();
            }
        }
    }
}
