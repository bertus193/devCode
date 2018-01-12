<?php

use Illuminate\Database\Seeder;

class Users_CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('users_courses')->delete();

            $users_courses = [
                ['user_id' => 1, 'course_id' => 1],
                ['user_id' => 1, 'course_id' => 2],
                ['user_id' => 1, 'course_id' => 3],
            ];

            DB::table('users_courses')->insert($users_courses);
        }
    }
}
