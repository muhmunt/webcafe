<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_akhir');
            $table->integer('seat');
            $table->text('description');
            $table->string('foto');
            $table->string('author');
            $table->integer('volume');
            $table->string('location');
            $table->integer('delete_is')->nullable();
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
        Schema::dropIfExists('news');
    }
}
