<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            'name' => 'Михаил',
            'surname' => 'Осипов',
            'patronymic' => 'Сергеевич',
            'birthday' => '2003-05-29',
            'email' => 'mishaosipov127@mail.ru',
            'phone' => '89121815910',
            'password' => 'misha777',
        ];

        Student::create($student);
    }
}
