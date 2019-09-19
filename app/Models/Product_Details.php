<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Details extends Model
{
    protected $table = 'product_details';
    protected $fillable = [
        'product_id', 'desc'
    ];

    public function tags()
    {
        return $this->hasMany('App\Models\Tag', 'product_detail_id');
    }
}
