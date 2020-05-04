<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'img', 'size_id', 'brand_id'
    ];
}
