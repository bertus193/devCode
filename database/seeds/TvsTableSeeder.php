<?php

use Illuminate\Database\Seeder;

class TvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
          DB::table('tvs')->delete();
          $tvs = [
              ['id' => 1, 'name' => 'Crear Gameboy con Sass, HTML y JavaScript', 'description' => 'En este tutorial exploraremos Sass y crearemos un Gameboy como ejemplo.', 'array_tags' => '', 'url' => 'https://www.youtube.com/watch?v=ldkgsUMOct8', 'author' => 'Alexander Guevara Benites', 'image' => 'images/tv/crear-gameboy-con-sass-html-y-javascript-tv1.jpg'],
              ['id' => 2, 'name' => 'Rompecabezas con JavaScript, HTML5 y CSS3', 'description' => 'En este tutorial aprenderemos a crear un rompecabezas con HTML, CSS y JavaScript.', 'array_tags' => '', 'url' => 'https://www.youtube.com/watch?v=dcIuh7JaxWw', 'author' => 'Alexander Guevara Benites', 'image' => 'images/tv/rompecabezas-con-javascript-html5-y-css3-tv1.jpg'],
              ['id' => 3, 'name' => 'Publicar app en el Play Store', 'description' => 'En este tutorial aprenderemos a subir una aplicación en Android a la Play Store.', 'array_tags' => '', 'url' => 'https://www.youtube.com/watch?v=X6qXMC8P0Y0', 'author' => 'Ever Vásquez', 'image' => 'images/tv/publicar-app-en-el-play-store-tv1.jpg'],
              ['id' => 4, 'name' => 'Tutorial Webpack 2: Primeros pasos', 'description' => 'Webpack es un empaquetador de módulos para aplicaciones JavaScript modernas. En este tutorial hablaremos sobre Webpack y en pocos minutos aprenderás qué es y cómo usarlo.', 'array_tags' => '', 'url' => 'https://www.youtube.com/watch?v=ldkgsUMOct8', 'author' => 'Alexander Guevara Benites', 'image' => 'images/tv/tutorial-webpack-2-primeros-pasos-tv1.jpg'],
          ];
          DB::table('tvs')->insert($tvs);
       }
    }
}
