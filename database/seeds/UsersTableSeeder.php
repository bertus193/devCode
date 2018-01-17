<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('users')->delete();
            $user = [
                ['id' => 1, 'name' => 'Usuario Prueba', 'email' => 'user@example.org', 'password' => bcrypt('secret')],
                ['id' => 2, 'name' => 'Usuario Admin Prueba', 'email' => 'admin@example.org', 'password' => bcrypt('secret')]
            ];
            DB::table('users')->insert($user);
            
            factory(App\Models\User::class, 18)->create();
        }
    }
}
