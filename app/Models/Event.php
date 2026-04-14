<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'city', 'date', 'duration', 'address', 'capacity'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
