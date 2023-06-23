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

    /**
     * Get the staff for the content.
     */
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'roles')->withPivot('role');
    }

    /**
     * Get the genres for the content.
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'content_genres');
    }

    /**
     * Get the studios for the content.
     */
    public function studios()
    {
        return $this->belongsToMany(Studio::class, 'content_studios');
    }

    /**
     * Get the characters for the content.
     */
    public function characters()
    {
        return $this->belongsToMany(Character::class, 'content_characters');
    }
}
