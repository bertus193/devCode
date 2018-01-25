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
                ['id' => 1, 'type' => 'Anual', 'monthly_price' => 12.0, 'total_price' => 144.0, 'months' => 12, 'benefits' => 'Acceso a todos los cursos por 12 meses'],
                ['id' => 2, 'type' => 'Mensual', 'monthly_price' => 15.0, 'total_price' => 15.0, 'months' => 1, 'benefits' => 'Acceso a todos los cursos por 1 mes'],
                ['id' => 3, 'type' => 'Gratuito', 'monthly_price' => 0.0, 'total_price' => 0.0, 'months' => 12, 'benefits' => 'Acceso al contenido gratuito'],
            ];

            DB::table('plans')->insert($plans);
        }
    }
}
