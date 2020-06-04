<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'name', 'price', 'discount', 'description', 'img', 'brand_id', 'category_id', 'stock'
    ];

    public function brands(){
        return $this->hasOne(Brands::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }
}
