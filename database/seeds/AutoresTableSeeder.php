<?php

use Illuminate\Database\Seeder;

class AutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //public\images\autores
        if (App::environment()!=='production') {
            DB::table('autores')->delete();
            $autores = [
                ['id' => 1, 'nombre' => 'Juan José Pino Reyes', 'foto' => 'public\images\autores\Imagen1(co)'],
                ['id' => 2, 'nombre' => 'Edwin Gonzales Melquiades', 'foto' => 'public\images\autores\Imagen2(co)'],
                ['id' => 3, 'nombre' => 'Laura Pardo Suárez', 'foto' => 'public\images\autores\Imagen3(ca)'],
                ['id' => 4, 'nombre' => 'Ruth Gómez Prado', 'foto' => 'public\images\autores\Imagen4(ca)'],
                ['id' => 5, 'nombre' => 'Ricardo Lugo', 'foto' => 'public\images\autores\Imagen5(co)'],
                ['id' => 6, 'nombre' => 'María López Urquijoa', 'foto' => 'public\images\autores\Imagen6(ca)'],
            ];

            DB::table('autores')->insert($autores);
        }
    }
}
