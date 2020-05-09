<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id', 'name', 'price', 'discount', 'description', 'img', 'size_id', 'brand_id', 'color_id', 'category_id'
    ];
}
