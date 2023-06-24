<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    use HasFactory;

    /**
     * Get the content for the content type.
     */
    public function content()
    {
        return $this->hasMany(Content::class);
    }
}
