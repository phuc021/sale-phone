<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producers extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];

    public function products()
    {
        return $this->hasMany('App/Models/Products','producer_id');
    }
}
