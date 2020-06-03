<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function produtos(){
        return $this->belongsTo(Produtos::class,  'id', 'category_id');
    }
}
