<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Get the character thats portrayed.
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
