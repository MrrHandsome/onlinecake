<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $primaryKey = 'cart_id';
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('cart_id');
            $table->string('id');
            $table->string('cake_id');
            $table->string('cake_name');
            $table->string('cake_type');
            $table->string('cake_price');
            $table->string('cake_image');
            $table->string('cake_qty');
           
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
        Schema::dropIfExists('carts');
    }
}