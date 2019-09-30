<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table="orders";
    protected $primaryKey ="order_id";
    protected $fillable=[
    	"order_id",
        "id",
        "cart_id",
        "fname",
        "lname",
        "cname",
        "add1",
        "add2",
        "pcode",
        "eamil",
        "phone",
        "notes",
        "created_at",
    	"updated_at",
        
    ];
}


