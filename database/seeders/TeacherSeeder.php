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
        $teachers = [
            [
                'name' => 'Евгения',
                'surname' => 'Клочева',
                'birthday' => '1989-09-19',
                'education_id' => '4',
                'email' => 'klocheva@mail.ru',
                'phone' => '89121916794',
                'password' => 'klocheva',
            ],
            [
                'name' => 'Ильдика',
                'surname' => 'Шафарук',
                'birthday' => '1979-09-09',
                'education_id' => '3',
                'email' => 'ildika@mail.ru',
                'phone' => '89121482794',
                'password' => 'ildika',
            ],
        ];

        foreach ($teachers as $teacher){
            Teacher::create($teacher);
        }
    }
}
