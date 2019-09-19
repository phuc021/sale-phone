<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'name', 'content', 'product_details_id'
    ];

    public function product_details()
    {
        return $this->hasMany('App\Models\Product_Details', 'tags_id');
    }
}
