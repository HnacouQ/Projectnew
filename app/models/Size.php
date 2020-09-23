<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    protected $fillable  = ['name'];
    //1 size có thể nằm trong nhiều chi tiết sản phẩm
    public function pro_detail(){
        return $this->hasMany(Product_detail::class,'size_id','id');
    }
}
