<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'img', 'configuration', 'price', 'featured','producer_id', 'quantity'
    ];

    public function producer()
    {
        return $this->belongsTo('App\Models\Producer', 'producer_id');
    }
    
    public function product_details()
    {
        return $this->hasMany('App\Models\Product_Details', 'product_id');
    }
}
