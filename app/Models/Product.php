<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function restaurant(){
        return $this->BelongsTo(Restaurant::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
