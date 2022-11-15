<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Student;
use App\Models\Course;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(0, 10) as $val) {
            Student::create([
                'student_name' => $faker->name
            ]);

            Course::create([
                'course_name'   => $faker->name,
                'credit'        => $faker->randomDigit
            ]);
        }
    }
}
