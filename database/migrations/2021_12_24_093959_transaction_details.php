<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionDetails', function (Blueprint $table) {
            $table->bigInteger('transactionID')->unsigned();
            $table->bigInteger('itemID')->unsigned();
            $table->primary(['transactionID', 'itemID']);
            $table->integer('quantity');
            $table->foreign('transactionID')->references('id')->on('transactions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('itemID')->references('id')->on('items')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactionDetails');
    }
}
