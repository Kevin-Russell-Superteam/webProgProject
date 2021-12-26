<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('itemsID')->unsigned();
            $table->string('name', 255);
=======
            $table->id()->autoIncrement();
            $table->string('name');
>>>>>>> c2c360f57b1357e14b91e8dd24403e22ee24123e
            $table->integer('price');
            $table->string('type', 100);
            $table->string('color', 100);
            $table->string('image', 255);
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
        Schema::dropIfExists('items');
    }
}
