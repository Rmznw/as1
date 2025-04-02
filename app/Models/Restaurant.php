<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Restaurant extends Model {

    use HasFactory;
    public function reservations(){
        return $this->hasMany(Reservation::class);


}

    public function city(){
        return $this->BelongsTo(City::class);


    }
    public function products(){
        return $this->hasMany(Product::class);


    }
}
