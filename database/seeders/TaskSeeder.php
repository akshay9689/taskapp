<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
     foreach(range(1, 20) as $value){
        DB::table('tasks')->insert([

            'title' => $faker->name(),
            'description' => $faker->text(),
            'due_date' =>$faker->dateTime()->format('Y-m-d'),

        ]);
    }

    }
}
