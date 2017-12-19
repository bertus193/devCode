<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('telefono', 25);
            $table->string('email', 100)->nullable();
            $table->text('observaciones', 100)->nullable();
            $table->string('sexo', 1)->default('H');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
