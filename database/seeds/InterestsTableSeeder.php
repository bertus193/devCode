<?php

use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
          DB::table('interests')->delete();
          $interests = [
              ['id' => 1, 'interest' => 'Python'],
              ['id' => 2, 'interest' => 'Ruby'],
              ['id' => 3, 'interest' => 'PHP'],
              ['id' => 4, 'interest' => 'Javascript'],
              ['id' => 5, 'interest' => 'HTML/CSS'],
              ['id' => 6, 'interest' => 'iOS'],
              ['id' => 7, 'interest' => 'Android'],
              ['id' => 8, 'interest' => 'Base de datos'],
              ['id' => 9, 'interest' => 'Servidores'],
              ['id' => 10, 'interest' => 'Electivos'],
              ['id' => 11, 'interest' => 'Illustrator'],
              ['id' => 12, 'interest' => 'Java'],
              ['id' => 13, 'interest' => 'Git'],
              ['id' => 14, 'interest' => 'QA'],
              ['id' => 15, 'interest' => 'Photoshop'],
              ['id' => 16, 'interest' => 'Diseño'],
              ['id' => 17, 'interest' => 'Linux'],
              ['id' => 18, 'interest' => 'Task runner'],
              ['id' => 19, 'interest' => 'Sass'],
              ['id' => 20, 'interest' => 'Webpack'],
              ['id' => 21, 'interest' => 'Xamarin'],
              ['id' => 22, 'interest' => 'Edición'],
          ];
          DB::table('interests')->insert($interests);
      }
    }
}
