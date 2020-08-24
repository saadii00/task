<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $fillable=['sku', 'stock'];
    public function getSkuAttribute($value){
        return $value;
    }
}
