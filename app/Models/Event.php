<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'city',
        'date',
        'duration',
        'address',
        'capacity'
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
}
