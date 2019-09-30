<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class page extends Model
{
    public static function insertData($data)
    {
      
            
            DB::table('cakes')->insert($data);
      
    }
}
