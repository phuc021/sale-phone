<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'shipping_address', 'shipping_date', 'shipping_status', 'shipping_customer'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Orders', 'order_id');
    }
}
