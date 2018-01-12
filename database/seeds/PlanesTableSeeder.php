<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('plans')->delete();
            $plans = [
                ['id' => 1, 'name' => 'Anual', 'benefits' => 'Acceso a todos los cursos por 12 meses'],
                ['id' => 2, 'name' => 'Mensual', 'benefits' => 'Acceso a todos los cursos por 1 mes'],
                ['id' => 3, 'name' => 'Comunidad', 'benefits' => 'Acceso al contenido gratuito'],
            ];

            DB::table('plans')->insert($plans);
        }
    }
}
