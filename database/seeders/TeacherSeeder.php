<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            'name' => 'Евгения',
            'surname' => 'Клочева',
            'birthday' => '19-09-1989',
            'education_id' => '4',
            'email' => 'klocheva@mail.ru',
            'phone' => '89121916794',
            'password' => 'klocheva',
        ];

        Teacher::create($teacher);
    }
}
