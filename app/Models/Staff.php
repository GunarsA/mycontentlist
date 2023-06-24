<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    /**
     * Get the roles for the staff.
     */
    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    /**
     * Get the positions for the staff.
     */
    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    /**
     * Get the content where staff is part of the cast.
     */
    public function content_cast()
    {
        return $this->belongsToMany(Content::class, 'roles')->withPivot('role');
    }

    /**
     * Get the content where staff is part of the crew.
     */
    public function content_crew()
    {
        return $this->belongsToMany(Content::class, 'positions');
    }
}
