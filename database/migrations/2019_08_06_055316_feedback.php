<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $primaryKey = 'f_id';
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('f_id');
            $table->string('id');
            $table->string('product');
            $table->string('rating');
          
          
           
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
        //
    }
}