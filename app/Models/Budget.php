<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = ['resident_id', 'km', 'active'];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }
}
