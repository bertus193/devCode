<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (App::environment()!=='production') {
          DB::table('courses')->delete();

          $courses = [
              ['id' => 1, 'name' => 'Curso de MongoDB', 'description' => 'Aprende a trabajar con MongoDB, la base de datos NoSQL más popular del mundo.'],
              ['id' => 2, 'name' => 'Curso de React Router 4', 'description' => 'Aprende React Router y facilita la escritura de aplicaciones webs SPA con React.'],
              ['id' => 3, 'name' => 'Fundamentos de Laravel', 'description' => 'Aprende a desarrollar en el framework de PHP de mayor crecimiento en la actualidad.'],
              ['id' => 4, 'name' => 'Curso de Python 3', 'description' => 'Aprende Python en su versión 3, uno de los lenguajes de programación más populares, fácil de leer y de aprender.'],
              ['id' => 5, 'name' => 'Curso de Base de Datos en MySQL', 'description' => 'Aprende a crear y mantener una Base de Datos SQL con MySQL, uno de los sistemas de base de datos más populares a nivel mundial e ideal para proyectos de pequeña y mediana escala.'],
              ['id' => 6, 'name' => 'Fundamentos de Java', 'description' => 'Aprende los Fundamentos de Java, uno de los lenguajes de programación más populares de todos los tiempos, empleando buenas prácticas de programación.'],
              ['id' => 7, 'name' => 'Curso Illustrator', 'description' => 'Aprende a utilizar iIlustrator, uno de los softwares más populares, potentes y requeridos en las áreas de diseño y arte gráfico.'],
              ['id' => 8, 'name' => 'Fundamentos de Ruby', 'description' => 'Aprende desde cero este lenguaje enfocado en la simplicidad y productividad del desarrollador. Recuerda que en nuestra comunidad Rubista tenemos un lema: ‘Si Matz es bueno, nosotros también’'],
              ['id' => 9, 'name' => 'Fundamentos de Angular.js', 'description' => 'Aprende a usar uno de los mejores frameworks de JavaScript, estructural, de código abierto y gratuito creado por Google.'],
              ['id' => 10, 'name' => 'Angular.js Avanzado', 'description' => 'En este curso llevaremos el desarrollo en Angular a un siguiente nivel, dando una mirada profunda a temas avanzados en este framework.'],
          ];

          DB::table('courses')->insert($courses);
      }
    }
}
