<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function events()
    {
        return $this->morphedByMany(Event::class, 'categoryable');
    }

    public function monuments()
    {
        return $this->morphedByMany(Monument::class, 'categoryable');
    }
}
