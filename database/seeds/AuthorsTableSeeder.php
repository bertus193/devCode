<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('authors')->delete();

            $authors = [
                ['id' => 1, 'name' => 'Juan José Pino Reyes', 'photo' => 'public\images\img1.JPG'],
                ['id' => 2, 'name' => 'Edwin Gonzales Melquiades', 'photo' => 'public\images\img2.JPG'],
                ['id' => 3, 'name' => 'Julio Giampiere Grados Caballero', 'photo' => 'public\images\img3.JPG'],
                ['id' => 4, 'name' => 'Nestor Plasencia Prado', 'photo' => 'public\images\img4.JPG'],
                ['id' => 5, 'name' => 'César Vereau', 'photo' => 'public\images\img5.JPG'],
                ['id' => 6, 'name' => 'Jean Carlos Mariños Urquiaga', 'photo' => 'public\images\img1.JPG'],
                ['id' => 7, 'name' => 'Alexander Guevara Benites', 'photo' => 'public\images\img2.JPG'],
                ['id' => 8, 'name' => 'Ever Vásquez', 'photo' => 'public\images\img3.JPG'],
            ];

            DB::table('authors')->insert($authors);
        }
    }
}
