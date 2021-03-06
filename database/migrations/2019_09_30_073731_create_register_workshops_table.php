<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_workshops', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('new_id')->unsigned();
            $table->foreign('new_id')->references('id')->on('news')->onDelete('cascade');
            $table->string('nama');
            $table->string('email');
            $table->string('number_telp');
            $table->string('size_chart');
            $table->integer('status')->default(0);
            $table->integer('delete_is')->default(0);
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
        Schema::dropIfExists('register_workshops');
    }
}
