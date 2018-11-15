<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_management', function (Blueprint $table) {
          $table->increments('id');
          $table->string('product_id')->unique();
          $table->string('product_type');
          $table->string('paper');
          $table->string('product_name');
          $table->string('product_description');
          $table->string('product_image');
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
          Schema::dropIfExists('product_management');
    }
}
