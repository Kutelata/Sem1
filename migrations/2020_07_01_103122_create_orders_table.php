<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('payment');
            $table->tinyInteger('status');
            $table->unsignedInteger('user_id'); 
            $table->float('total_price');
            $table->timestamps();
            $table->text('message');
            $table->unsignedInteger('payment_id'); 
            $table->unsignedInteger('ship_id'); 
            $table->foreign('user_id')->references('id')->on('users');  
            $table->foreign('payment_id')->references('id')->on('payments');  
            $table->foreign('ship_id')->references('id')->on('ships');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
