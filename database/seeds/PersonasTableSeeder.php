<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    public function run()
    {
        if (App::environment()!=='production') {
            // Vaciamos la tabla personas
            DB::table('personas')->delete();
            
            factory(App\Persona::class, 100)->create();
        }
    }
}
