<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('mini');
            $table->string('capa');
            $table->string('audio');
            $table->text('description');
            $table->string('video');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('tema_id');
            $table->timestamps();

            $table->foreign('tipo_id')
                ->references('id')
                ->on('tipos');

            $table->foreign('tema_id')
                ->references('id')
                ->on('temas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidades');
    }
}
