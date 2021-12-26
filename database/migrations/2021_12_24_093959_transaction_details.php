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
        Schema::create('transactionDetails', function(Blueprint $table){
            $table->bigInteger('transactionsID')->unsigned();
            // $table->foreignID('transactionsID');
            $table->bigInteger('usersID')->unsigned();
            // $table->foreignId('userID');
            $table->primary(['transactionsID', 'usersID']);
            $table->integer('quantity');
            $table->foreign('transactionsID')->references('transactionsID')->on('transactions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('usersID')->references('usersID')->on('users');

            
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
