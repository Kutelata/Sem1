<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status');
            $table->string('name',100);          
            $table->string('slug');
            $table->unsignedInteger('category_id');
            $table->string('link_image'); 
            $table->string('sumary');             
            $table->text('content')->nullable();
            $table->string('meta_tittle');    
            $table->string('meta_desc');    
            $table->string('meta_key');    
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
