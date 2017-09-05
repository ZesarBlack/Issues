<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Issues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues',function(Blueprint $table)
        {
          $table->increments('issue_id');
          $table->string('descripcion');
          $table->date('fecha_creacion');
          $table->date('fecha_entrega');
          $table->string('comentario');
          $table->string('creador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: dropIfExists('issues');
    }
}
