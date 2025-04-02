<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model


{
    public function user(){
        return $this->BelongsTo(User::class);

    }
    public function restaurant(){
        return $this->BelongsTo(Restaurant::class);

    } //
}
