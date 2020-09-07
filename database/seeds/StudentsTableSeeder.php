<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i <5 ; $i++) {
        $newStudent = new Student();
        $newStudent->nome = $faker->firstName();
        $newStudent->cognome = $faker->lastName;
        $newStudent->anni = $faker->numberBetween(2,100);
        $newStudent->note = $faker->paragraph();
        $newStudent->media = $faker->randomFloat(2,0,10);
        $newStudent->save();

      }
    }
}
