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
        $this->call(CoursesTableSeeder::class);

        $this->call(AuthorsTableSeeder::class);
        $this->call(TutorialsTableSeeder::class);
        $this->call(TvsTableSeeder::class);

        $this->call(InterestsTableSeeder::class);
        $this->call(PlansTableSeeder::class);

        $this->call(TopicsTableSeeder::class);
        
        $this->call(Users_CoursesTableSeeder::class);
    }
}
