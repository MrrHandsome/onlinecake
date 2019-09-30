<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    
    protected $table="contactus";
    protected $primaryKey ="cu_id";
    protected $fillable=[
    	"cu_id",
        "id",
        "name",
        "email",
        "phone",
        "message",
        "created_at",
    	"updated_at",
        
    ];
}
