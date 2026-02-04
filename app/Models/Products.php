<?php

namespace App\Models;
use App\Models\ProdeuctDateils;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    public function productDetail(){
        return $this->hasOne(ProductDateils::class,'product_id');
    }
}
