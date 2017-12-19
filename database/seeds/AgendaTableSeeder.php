<?php

use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('agenda')->delete();
            
            factory(App\agenda::class, 100)->create();
        }
    }
}
