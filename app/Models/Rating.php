<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['rating']; //'is_favorite', 'date_started', 'date_finished', 'review'];

    /**
     * Get the user that owns the rating.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the content that owns the rating.
     */
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
