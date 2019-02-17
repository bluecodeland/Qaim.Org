<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaaliTalabeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maali_talabe', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('user_id');
            $table->integer('salary');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');
            $table->string('name');

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
        Schema::dropIfExists('maali_talabe');
    }
}
