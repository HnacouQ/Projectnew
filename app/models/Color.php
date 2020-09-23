<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Color extends Model
{
    //
    protected $fillable = ['name'];
    //1 màu sắc có thể nằm trong nhiều chi tiết sản phẩm
    public function pro_detail(){
        return $this->hasMany(Product_detail::class,'color_id','id');
    }
}
