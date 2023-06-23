<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    /**
     * Get the content for the studio.
     */
    public function content()
    {
        return $this->belongsToMany(Content::class, 'content_studios');
    }
}
