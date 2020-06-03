<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';

    protected $fillable = [
        'name'
    ];

    public function produtos(){
        return $this->belongsTo(Produtos::class, 'id', 'brand_id');
    }
}
