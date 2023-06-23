<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    /**
     * Get the content for the character.
     */
    public function content()
    {
        return $this->belongsToMany(Content::class, 'content_characters');
    }
}
