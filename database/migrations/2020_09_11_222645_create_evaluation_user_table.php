<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_user', function (Blueprint $table) {
            $table->increments('id');
            
            // FK
            $table->integer('usr_id')->unsigned();
            $table->integer('tst_id')->unsigned();

            $table->integer('puntaje_obtenido')->default(0);
            $table->integer('puntaje_total_prueba')->default(10);
            
        
            $table->foreign('tst_id')->references('id')->on('evaluations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usr_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('evaluation_user');
    }
}
