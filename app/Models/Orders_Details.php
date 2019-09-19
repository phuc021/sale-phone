<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders_Details extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'quantity'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Orders', 'order_id');
    }

}
