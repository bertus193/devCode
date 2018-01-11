<?php

use Illuminate\Database\Seeder;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('tutorials')->delete();
            $tutorials = [
                ['id' => 1, 'name' => 'Caché de lado del servidor con Express en NodeJS', 'descripcion' => 'Aprende la técnica de almacenar datos en memoria para mejorar el rendimiento de cualquier aplicación, móvil, web o de escritorio.', 'autor' => 'Julio Giampiere Grados Caballero', 'fecha' => '27/11/2017'],
                ['id' => 2, 'name' => 'Vincular eventos a elementos con jQuery', 'descripcion' => 'Aprende a asociar eventos a tus elementos en tus aplicaciones y sitios web a través de jQuery.', 'autor' => 'Julio Giampiere Grados Caballero', 'fecha' => '17/07/2017'],
                ['id' => 3, 'name' => 'Operador condicional ternario en JavaScript', 'descripcion' => 'En este tutorial aprenderemos a usar uno de los operadores condicionales más sencillos de JavaScript, el operador ternario que te permite evaluar una condición, y ejecutar una de dos instrucciones dependiendo de la condición evaluada.', 'autor' => 'Julio Giampiere Grados Caballero', 'fecha' => '19/06/2017'],
                ['id' => 4, 'name' => 'Controles de video con HTML5', 'descripcion' => 'En este tutorial crearemos una aplicación para reproducir el clip de "El Aro", modificando el comportamiento de un video sin usar los clásicos controles de HTML5', 'autor' => 'Nestor Plasencia Prado', 'fecha' => '08/02/2017'],
                ['id' => 5, 'name' => 'Hacer web scraping con PHP', 'descripcion' => 'En este tutorial aprenderemos a hacer web scraping solo con PHP y a hacer web scraping con cURL y PHP. También conoceremos para qué fines lo podemos utiliza', 'autor' => 'Juan José Pino Reyes', 'fecha' => '30/11/2015'],
                ['id' => 6, 'name' => 'Plugins de Sublime Text para Django', 'descripcion' => 'Sublime Text es uno de los mejores editores de texto y editor de código creado en Python. Y en este tutorial les mostraremos como los desarrolladores de Python y Django pueden sacarle el máximo provecho a este editor con sus plugins.', 'autor' => 'Jean Carlos Mariños Urquiaga', 'fecha' => '30/11/2015'],
                ['id' => 7, 'name' => 'Web Starter Kit de Google', 'descripcion' => 'En esta oportunidad hablaremos sobre la nueva herramienta en desarrollo que ha lanzado Google, para iniciar rápidamente con proyectos web, llamada Web Starter Kit.', 'autor' => 'Edwin Gonzales Melquiades', 'fecha' => '30/11/2015'],
                ['id' => 8, 'name' => 'Laravel 5 - Entorno de desarrollo', 'descripcion' => 'En este primer tutorial de Laravel 5 hablaremos sobre el entorno de desarrollo e instalación de Composer en Mac. Unix y Windows.', 'autor' => 'Ricardo Lugo', 'fecha' => '30/11/2015'],
                ['id' => 9, 'name' => 'Laravel 5 - Nuestro primer proyecto', 'descripcion' => 'En este segundo tutorial empezaremos a crear nuestro primer proyecto en Laravel 5. Además, comentaremos algunas diferencias con respecto a la versión anterior. ¿Estás listo? ¡Manos a la obra!', 'autor' => 'Ricardo Lugo', 'fecha' => '30/11/2015'],
                ['id' => 10, 'name' => 'Laravel 5: Base de datos y environment', 'descripcion' => 'En este tercer tutorial de Laravel 5 vamos a hablar sobre la configuración de base de datos y cuáles son las variable de entorno o enviroment. ¿Listos? ¡Empecemos!', 'autor' => 'Ricardo Lugo', 'fecha' => '30/11/2015'],
                ['id' => 11, 'name' => 'Angular 1.4 : Migrar o no Migrar, he ahí el dilema', 'descripcion' => 'Conoce cuales son las ventajas de usar AngularJS, uno de los framework más populares escritos en JavaScript , en su versión actual.', 'autor' => 'César Vereau', 'fecha' => '30/11/2015'],
                ['id' => 12, 'name' => 'AngularJS vs BackboneJS, Jquery, ReactJS y otros', 'descripcion' => 'Conoce las ventajas de Angular JS frente a distintas alternativas de desarrollo web como Backbone JS, Jquery o ReactJS.', 'autor' => 'César Vereau', 'fecha' => '30/11/2015'],
                ['id' => 13, 'name' => 'Animaciones personalizadas con jQuery', 'descripcion' => 'Animaciones personalizadas con jQuery', 'autor' => 'Julio Giampiere Grados Caballero', 'fecha' => '30/11/2015'],
                ['id' => 14, 'name' => 'Cómo conectar MongoDB en Node.js', 'descripcion' => 'MongoDB es una de las bases de datos no relacionales más utilizadas en la actualidad, en este tutorial veremos como conectar un proyecto en Node.js con este motor de base de datos.', 'autor' => 'Jean Carlos Mariños Urquiaga', 'fecha' => '30/11/2015'],
                ['id' => 15, 'name' => 'Instalación de WooCommerce en Wordpress', 'descripcion' => 'En este tutorial aprenderemos a instalar WooCommerce en Wordpress para crear nuestra tienda con esta popular plataforma de comercio electrónico.', 'autor' => 'Juan José Pino Reyes', 'fecha' => '30/11/2015'],
            ];
            DB::table('tutorials')->insert($tutorials);
        }
    }
}
