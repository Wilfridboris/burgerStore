<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBurger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('burgers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('topic');
            $table->text('description');
            $table->integer('price');
            $table->integer('qty');
            $table->integer('type_burger');
            $table->string('img');
            $table->json('ingredients');
            $table->foreign('type_burger')
            ->references('id')
            ->on('type_burgers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('burgers');
    }
}
