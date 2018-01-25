<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
              ['id' => 1, 'name' => 'Caché de lado del servidor con Express en NodeJS', 'description' => 'Aprende la técnica de almacenar datos en memoria para mejorar el rendimiento de cualquier aplicación, móvil, web o de escritorio.', 'author_id' => 3, 'date' => Carbon::parse('2017-11-27'), 'image' => 'images/tutorials/tutorial-cache.png'],
              ['id' => 2, 'name' => 'Vincular eventos a elementos con jQuery', 'description' => 'Aprende a asociar eventos a tus elementos en tus aplicaciones y sitios web a través de jQuery.', 'author_id' => 3, 'date' => Carbon::parse('2017-01-17'), 'image' => 'images/tutorials/vincular-eventos-a-elementos-con-jquery-t1.png'],
              ['id' => 3, 'name' => 'Operador condicional ternario en JavaScript', 'description' => 'En este tutorial aprenderemos a usar uno de los operadores condicionales más sencillos de JavaScript, el operador ternario que te permite evaluar una condición, y ejecutar una de dos instrucciones dependiendo de la condición evaluada.', 'author_id' => 3, 'date' => Carbon::parse('2017-06-19'), 'image' =>'images/tutorials/operador-ternario-javascript-t1.png'],
              ['id' => 4, 'name' => 'Controles de video con HTML5', 'description' => 'En este tutorial crearemos una aplicación para reproducir el clip de "El Aro", modificando el comportamiento de un video sin usar los clásicos controles de HTML5', 'author_id' => 4, 'date' => Carbon::parse('2017-02-08'), 'image' => 'images/tutorials/controles-de-video-con-html5-t1.png'],
              ['id' => 5, 'name' => 'Hacer web scraping con PHP', 'description' => 'En este tutorial aprenderemos a hacer web scraping solo con PHP y a hacer web scraping con cURL y PHP. También conoceremos para qué fines lo podemos utiliza', 'author_id' => 1, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/hacer-web-scraping-con-php-t1.jpg'],
              ['id' => 6, 'name' => 'Plugins de Sublime Text para Django', 'description' => 'Sublime Text es uno de los mejores editores de texto y editor de código creado en Python. Y en este tutorial les mostraremos como los desarrolladores de Python y Django pueden sacarle el máximo provecho a este editor con sus plugins.', 'author_id' => 6, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/plugins-de-sublime-text-para-django-t1.png'],
              ['id' => 7, 'name' => 'Web Starter Kit de Google', 'description' => 'En esta oportunidad hablaremos sobre la nueva herramienta en desarrollo que ha lanzado Google, para iniciar rápidamente con proyectos web, llamada Web Starter Kit.', 'author_id' => 2, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/web-starter-kit-de-google-t1.png'],
              ['id' => 8, 'name' => 'Laravel 5 - Entorno de desarrollo', 'description' => 'En este primer tutorial de Laravel 5 hablaremos sobre el entorno de desarrollo e instalación de Composer en Mac. Unix y Windows.', 'author_id' => 9, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/laravel-entorno-de-desarrollo-t1.png'],
              ['id' => 9, 'name' => 'Laravel 5 - Nuestro primer proyecto', 'description' => 'En este segundo tutorial empezaremos a crear nuestro primer proyecto en Laravel 5. Además, comentaremos algunas diferencias con respecto a la versión anterior. ¿Estás listo? ¡Manos a la obra!', 'author_id' => 9, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/laravel-5-nuestro-primer-proyecto-t1.png'],
              ['id' => 10, 'name' => 'Laravel 5: Base de datos y environment', 'description' => 'En este tercer tutorial de Laravel 5 vamos a hablar sobre la configuración de base de datos y cuáles son las variable de entorno o enviroment. ¿Listos? ¡Empecemos!', 'author_id' => 9, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/laravel-5-base-de-datos-y-environment-t1.png'],
              ['id' => 11, 'name' => 'Angular 1.4 : Migrar o no Migrar, he ahí el dilema', 'description' => 'Conoce cuales son las ventajas de usar AngularJS, uno de los framework más populares escritos en JavaScript , en su versión actual.', 'author_id' => 5, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/migrar-a-angular-14-t1.jpg'],
              ['id' => 12, 'name' => 'AngularJS vs BackboneJS, Jquery, ReactJS y otros', 'description' => 'Conoce las ventajas de Angular JS frente a distintas alternativas de desarrollo web como Backbone JS, Jquery o ReactJS.', 'author_id' => 5, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/angularjs-vs-backbonejs-jquery-reactjs-t1.jpg'],
              ['id' => 13, 'name' => 'Animaciones personalizadas con jQuery', 'description' => 'Animaciones personalizadas con jQuery', 'author_id' => 3, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/animaciones-con-jquery-t1.png'],
              ['id' => 14, 'name' => 'Cómo conectar MongoDB en Node.js', 'description' => 'MongoDB es una de las bases de datos no relacionales más utilizadas en la actualidad, en este tutorial veremos como conectar un proyecto en Node.js con este motor de base de datos.', 'author_id' => 6, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/como-utilizar-mongodb-en-nodejs-t1.jpg'],
              ['id' => 15, 'name' => 'Instalación de WooCommerce en Wordpress', 'description' => 'En este tutorial aprenderemos a instalar WooCommerce en Wordpress para crear nuestra tienda con esta popular plataforma de comercio electrónico.', 'author_id' => 1, 'date' => Carbon::parse('2015-11-30'), 'image' => 'images/tutorials/instalacion-de-woocommerce-en-wordpress-t1.jpg'],
          ];

          DB::table('tutorials')->insert($tutorials);
      }
    }
}
