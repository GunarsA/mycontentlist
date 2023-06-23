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
     * Get the content for the staff.
     */
    public function content()
    {
        return $this->belongsToMany(Content::class)->withPivot('role');
    }
}
