<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','slug','parent_id','status'];

    //1 danh mục có thế có nhiều sản phẩm
    public function pro(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
//lệnh tạo models + migrate
//php artisan make:model models\Category --migration