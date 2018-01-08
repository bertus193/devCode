<?php

use Illuminate\Database\Seeder;

class PlanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('planes')->delete();
            $planes = [
                ['id' => 1, 'nombre' => 'Anual', 'beneficios' => 'Acceso a todos los cursos por 12 meses'],
                ['id' => 2, 'nombre' => 'Mensual', 'beneficios' => 'Acceso a todos los cursos por 1 mes'],
                ['id' => 3, 'nombre' => 'Comunidad', 'beneficios' => 'Acceso al contenido gratuito'],
            ];

            DB::table('planes')->insert($planes);
        }
    }
}
