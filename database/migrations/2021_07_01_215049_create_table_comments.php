<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer_name');
            $table->text('comment');
            $table->integer('review');
            $table->integer('burger_id');
            $table->foreign('burger_id')->references('id')->on('burgers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_comments');
    }
}
