<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    //
    protected $fillable = ['product_id','color_id','size_id','image','price','sale_price'];

    // chi tiết sản phẩm chỉ có 1 màu sắc 
    public function color(){
        return $this->hasOne(Color::class,'id','color_id');
    }
    // chi tiết sản phẩm chỉ có 1 kích cỡ
    public function size(){
        return $this->hasOne(Size::class,'id','size_id');
    }
    //
    public function product(){
        return $this->hasMany(Product::class,'id','product_id');
    }
}
