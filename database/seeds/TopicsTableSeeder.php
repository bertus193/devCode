<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {

          DB::table('topics')->delete();

          $topics = [
              ['id' => 1, 'name' => 'Introducción', 'course_id' => 1],
              ['id' => 2, 'name' => '¿Qué es NoSQL?', 'course_id' => 1],
              ['id' => 3, 'name' => 'Tipos de base de Datos NoSQL', 'course_id' => 1],
              ['id' => 4, 'name' => '¿Por qué usar NoSQL?', 'course_id' => 1],
              ['id' => 5, 'name' => 'Introducción', 'course_id' => 2],
              ['id' => 6, 'name' => 'Proyecto', 'course_id' => 2],
              ['id' => 7, 'name' => 'Instalación', 'course_id' => 2],
              ['id' => 8, 'name' => 'Webpack Dev Server', 'course_id' => 2],
              ['id' => 9, 'name' => 'Browser Router', 'course_id' => 2],
              ['id' => 10, 'name' => 'Route', 'course_id' => 2],
              ['id' => 11, 'name' => 'Inline rendering', 'course_id' => 2],
              ['id' => 12, 'name' => 'Consumiendo API GitHub con Axios', 'course_id' => 2],
              ['id' => 13, 'name' => 'Parámetros en Rutas', 'course_id' => 2],
              ['id' => 14, 'name' => 'Redirect', 'course_id' => 2],
              ['id' => 15, 'name' => 'Error 404', 'course_id' => 2],
              ['id' => 16, 'name' => 'History', 'course_id' => 2],
              ['id' => 17, 'name' => 'Introducción', 'course_id' => 3],
              ['id' => 18, 'name' => 'Vagrant y máquinas virtuales', 'course_id' => 3],
              ['id' => 19, 'name' => 'Configuración de Vagrant', 'course_id' => 3],
              ['id' => 20, 'name' => 'Composer', 'course_id' => 3],
              ['id' => 21, 'name' => 'Proyecto Devit', 'course_id' => 3],
              ['id' => 22, 'name' => 'Estructura del proyecto', 'course_id' => 3],
              ['id' => 23, 'name' => 'Introducción', 'course_id' => 3],
              ['id' => 24, 'name' => 'Rutas y controladores', 'course_id' => 3],
              ['id' => 25, 'name' => 'Form Request y Validaciones', 'course_id' => 3],
              ['id' => 26, 'name' => 'Migraciones', 'course_id' => 3],
              ['id' => 27, 'name' => 'Seeders', 'course_id' => 3],
              ['id' => 28, 'name' => 'Eloquent ORM', 'course_id' => 3],
              ['id' => 29, 'name' => 'Blade', 'course_id' => 3],
              ['id' => 30, 'name' => 'Interacción básica Vista/Controlador/Model', 'course_id' => 3],
              ['id' => 31, 'name' => 'Configuración del proyecto', 'course_id' => 3],
              ['id' => 32, 'name' => 'Creación de la base de datos', 'course_id' => 3],
              ['id' => 33, 'name' => 'Reutilización de vistas', 'course_id' => 3],
              ['id' => 34, 'name' => 'Rutas y controladores', 'course_id' => 3],
              ['id' => 35, 'name' => 'Introducción', 'course_id' => 4],
              ['id' => 36, 'name' => 'Instalación', 'course_id' => 4],
              ['id' => 37, 'name' => 'Tipos básicos de datos', 'course_id' => 4],
              ['id' => 38, 'name' => 'Tuplas', 'course_id' => 4],
              ['id' => 39, 'name' => 'Manejo de excepciones', 'course_id' => 4],
              ['id' => 40, 'name' => 'Introducción MySQL', 'course_id' => 5],
              ['id' => 41, 'name' => 'Características de MySQL', 'course_id' => 5],
              ['id' => 42, 'name' => 'Seleccionar columnas y DISTINCT', 'course_id' => 5],
              ['id' => 43, 'name' => 'Cláusulas ORDER BY y LIMIT', 'course_id' => 5],
              ['id' => 44, 'name' => '¿Qué es JAVA?', 'course_id' => 6],
              ['id' => 45, 'name' => 'Instalar Java', 'course_id' => 6],
              ['id' => 46, 'name' => 'Hola mundo', 'course_id' => 6],
              ['id' => 47, 'name' => 'Variables', 'course_id' => 6],
              ['id' => 48, 'name' => 'Introducción', 'course_id' => 7],
              ['id' => 49, 'name' => 'Interfaz', 'course_id' => 7],
              ['id' => 50, 'name' => 'Espacio de trabajo', 'course_id' => 7],
              ['id' => 51, 'name' => 'Herramientas básicas', 'course_id' => 7],
              ['id' => 52, 'name' => 'Formas básicas', 'course_id' => 7],
              ['id' => 53, 'name' => 'Trazo', 'course_id' => 7],
              ['id' => 54, 'name' => 'Pluma', 'course_id' => 7],
              ['id' => 55, 'name' => 'Introducción', 'course_id' => 8],
              ['id' => 56, 'name' => 'Ventajas de Ruby', 'course_id' => 8],
              ['id' => 57, 'name' => 'Comenzando con Ruby', 'course_id' => 8],
              ['id' => 58, 'name' => 'Sintaxis', 'course_id' => 8],
              ['id' => 59, 'name' => 'Testing en Ruby', 'course_id' => 8],
              ['id' => 60, 'name' => 'Introducción a Angular.js', 'course_id' => 9],
              ['id' => 61, 'name' => 'Módulos', 'course_id' => 9],
              ['id' => 62, 'name' => 'Controladores y filtros', 'course_id' => 9],
              ['id' => 63, 'name' => 'Servicio y $httpBackend', 'course_id' => 9],
              ['id' => 64, 'name' => 'Accediendo a datos $http y $resource', 'course_id' => 9],
              ['id' => 65, 'name' => 'Usando Resource para precargar información', 'course_id' => 9],
          ];

          DB::table('topics')->insert($topics);
       }
    }
}
