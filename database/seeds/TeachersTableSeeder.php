<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker;
class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i <5 ; $i++) {
        $newTeacher = new Teacher();
        $newTeacher->nome = $faker->firstName();
        $newTeacher->cognome = $faker->lastName;
        $newTeacher->anni = $faker->numberBetween(25,100);
        $newTeacher->note = $faker->paragraph();
        $newTeacher->save();
      }
    }
}
