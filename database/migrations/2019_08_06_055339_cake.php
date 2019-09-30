

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $primaryKey = 'cake_id';
    public function up()
    {
        Schema::create('cakes', function (Blueprint $table) {
        $table->increments('cake_id');
        $table->string('cake_name');
        $table->string('cake_type');
        $table->string('cake_price');
        $table->string('cake_image');
        $table->timestamps();
       
        });
        $image = $request->file('cake_image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $this->postImage->add($input);
        
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cakes');
    }
}



