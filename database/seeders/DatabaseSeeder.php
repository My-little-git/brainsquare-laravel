<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            SubjectSeeder::class,
            StatusSeeder::class,
            EducationSeeder::class,
            CourseTypeSeeder::class,
            CenterSeeder::class,
            AudienceSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            LessonSeeder::class,
            VisitSeeder::class,
            LessonFileSeeder::class,
            CourseSeeder::class,
            CourseStudentSeeder::class,
            LessonTeacherSeeder::class,
        ]);
    }
}
