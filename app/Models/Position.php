<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    /**
     * Get the name for the position.
     */
    public function position()
    {
        return $this->belongsTo(PositionType::class);
    }
}
