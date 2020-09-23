<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','slug','status','content','category_id'];

    //1 sản phẩm chỉ thuộc 1 category
    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    //
    public function pro_detail(){
        return $this->hasOne(Product_detail::class,'product_id','id');
    }
    
}


// @foreach($product as $data)
// {{$data->cat->name}}
