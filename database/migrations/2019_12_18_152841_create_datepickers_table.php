<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatepickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datepickers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
           // $table->date('date');
           date("Y-m-d H:i:s", strtotime($request->input('date')));
            $table->string('prenom');
            $table->string('adresse');
            $table->string('email');
            $table->integer('telephone');
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
        Schema::dropIfExists('datepickers');
    }
}
