<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Order Items
     */
    public function items() {
        return $this->hasMany('App\OrderItems', 'order_id');
    }
    /**
     * Order User
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
