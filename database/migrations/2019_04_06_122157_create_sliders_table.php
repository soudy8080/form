<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Department');
            $table->integer('Year');
            $table->string('Pname');
            $table->string('Supervisor');
            $table->string('Leader');
            $table->string('Socend_p');
            $table->string('L_email');
            $table->string('Socend_E');
            $table->integer('L_phone');
            $table->integer('Socend_ph');
            $table->string('Description');
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
        Schema::dropIfExists('sliders');
    }
}
