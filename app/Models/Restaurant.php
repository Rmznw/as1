<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {


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
