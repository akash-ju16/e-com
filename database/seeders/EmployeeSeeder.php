<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Employe;
use App\Models\Department;

class EmployeeSeeder extends Seeder
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

            $empData = Employe::create([
                'ename' => $faker->name,
                'age'   => $faker->randomDigit,
            ]);

            Department::create([
                'dname'      => $faker->name,
                'location'   => $faker->randomDigit,
                'employe_id' => $empData->id,
            ]);
            // DB::table('employes')->insert([
            //     'ename' => $faker->name,
            //     'age'   => $faker->randomDigit,
            // ]);
        }
    }
}
