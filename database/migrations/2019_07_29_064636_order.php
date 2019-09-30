<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $primaryKey = 'order_id';
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('id');
            $table->string('cart_id');
           
            $table->string('fname');
            $table->string('lname');
            $table->string('cname');
            $table->string('add1');
            $table->string('add2');
            $table->string('pcode');
            $table->string('email');
            $table->string('phone');
            $table->string('notes');
           
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
        Schema::dropIfExists('orders');
    }
}
