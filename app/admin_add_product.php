<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_add_product extends Model
{
    protected $table="cakes";
    protected $primaryKey ="cake_id";
    protected $fillable=[
    	"cake_id",
        "cake_name",
        "cake_type",
        "cake_price",
        "cake_image",
       
        "created_at",
    	"updated_at",
        
    ];
}
