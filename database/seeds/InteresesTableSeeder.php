<?php

use Illuminate\Database\Seeder;

class InteresesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (App::environment()!=='production') {
          DB::table('intereses')->delete();

          $intereses = [
              ['id' => 1, 'lenguaje' => 'Angular'],
              ['id' => 2, 'lenguaje' => 'C++'],
              ['id' => 3, 'lenguaje' => 'C#'],
              ['id' => 4, 'lenguaje' => 'C'],
              ['id' => 5, 'lenguaje' => 'Java'],
              ['id' => 6, 'lenguaje' => 'JavaScript'],
              ['id' => 7, 'lenguaje' => 'php'],
              ['id' => 8, 'lenguaje' => 'Python'],
              ['id' => 9, 'lenguaje' => 'Ruby'],
              ['id' => 10, 'lenguaje' => 'HTML'],
          ];

          DB::table('intereses')->insert($intereses);
    }
  }
}
