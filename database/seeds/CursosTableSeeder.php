<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('cursos')->delete();

            $cursos = [
                ['id' => 1, 'name' => 'Curso de MongoDB', 'descripcion' => 'Aprende a trabajar con MongoDB, la base de datos NoSQL más popular del mundo.'],
                ['id' => 2, 'name' => 'Curso de React Router 4', 'descripcion' => 'Aprende React Router y facilita la escritura de aplicaciones webs SPA con React.'],
                ['id' => 3, 'name' => 'patrones de diseño en JavaScript', 'descripcion' => 'Aprende a implementar los diferentes patrones de diseño en JavaScript'],
            ];

            DB::table('cursos')->insert($cursos);
        }
    }
}
