<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    /**
     * Get the Order of order items
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
