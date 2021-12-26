<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table){
            $table->bigIncrements('transactionsID');
            $table->foreignId('itemsID');
            $table->foreign('itemsID')->references('itemsID')->on('items');
            $table->date('transactionDate');
            $table->string('transactionMethod', 100);
            $table->string('cardNumber')->default("None");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}