<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function products(){
        return $this->belongsToMany(Produtos::class);
    }
}
