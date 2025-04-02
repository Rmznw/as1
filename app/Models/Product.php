<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Product extends Model
{
    use HasFactory;
    public function restaurant(){
        return $this->BelongsTo(Restaurant::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
