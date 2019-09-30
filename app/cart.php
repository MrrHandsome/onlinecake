<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table="carts";
    protected $primaryKey ="cart_id";
    protected $fillable=[
        "cart_id",
        "id",
    	"cake_id",
        "cake_name",
        "cake_type",
        "cake_price",
        "cake_image",
        "cake_qty",
       "created_at",
    	"updated_at",
        
     ];
    
}
