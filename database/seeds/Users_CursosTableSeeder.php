<?php

use Illuminate\Database\Seeder;

class Users_CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('users_cursos')->delete();

            $users_cursos = [
                ['user_id' => 1, 'curso_id' => 1],
                ['user_id' => 1, 'curso_id' => 1],
                ['user_id' => 1, 'curso_id' => 1],
            ];

            DB::table('users_cursos')->insert($users_cursos);
        }
    }
}
