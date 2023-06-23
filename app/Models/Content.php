<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * Get the ratings for the content.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
