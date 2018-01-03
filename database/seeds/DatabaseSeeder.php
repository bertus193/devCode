<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generamos datos de prueba con su seeder
        //$this->call(UsersTableSeeder::class);
                
        $this->call(UsersTableSeeder::class);
        $this->call(CursosTableSeeder::class);
    }
}
