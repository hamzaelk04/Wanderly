<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['event_id', 'service_fee', 'name', 'price', 'quantity'];

    public function event()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }

}
