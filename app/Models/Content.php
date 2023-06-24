<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * Get the content type for the content.
     */
    public function type()
    {
        return $this->belongsTo(ContentType::class, 'content_type_id');
    }

    /**
     * Get the ratings for the content.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    /**
     * Get the crew for the content.
     */
    public function crew()
    {
        return $this
            ->belongsToMany(Staff::class, 'positions')
            ->join('position_types', 'position_types.id', '=', 'positions.position_type_id')
            ->select('staff.name as name', 'position_types.position as position');
    }

    /**
     * Get the cast for the content.
     */
    public function cast()
    {
        return $this
            ->belongsToMany(Staff::class, 'roles')
            ->join('characters', 'characters.id', '=', 'roles.character_id')
            ->select('staff.name as name', 'characters.name as character');
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
