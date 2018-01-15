<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {

          DB::table('topics')->delete();
          
          $topics = [
              ['id' => 1, 'name' => 'Introducción', 'course_id' => 1],
              ['id' => 2, 'name' => '¿Qué es NoSQL?', 'course_id' => 1],
              ['id' => 3, 'name' => 'Tipos de base de Datos NoSQL', 'course_id' => 1],
              ['id' => 4, 'name' => '¿Por qué usar NoSQL?', 'course_id' => 1],
              ['id' => 5, 'name' => 'Tema 1 [...]', 'course_id' => 2],
              ['id' => 6, 'name' => 'Tema 2 [...]', 'course_id' => 2],
              ['id' => 7, 'name' => 'Tema 1 [...]', 'course_id' => 3],
              ['id' => 8, 'name' => 'Tema 1 [...]', 'course_id' => 4],
              ['id' => 9, 'name' => 'Tema 1 [...]', 'course_id' => 5],
              ['id' => 10, 'name' => 'Tema 1 [...]', 'course_id' => 6],
          ];

          DB::table('topics')->insert($topics);
       }
    }
}
