<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class);

    }


//    public function category()
//    {
//        return $this->hasMany(Category::class);
//
//    }
}
