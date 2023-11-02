<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['resident_id', 'pickup_location', 'destination'];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }

    public function scopeFilterByPlotId($query, $plotId)
{
    return $query->whereHas('resident', function ($query) use ($plotId) {
        $query->where('plot_id', $plotId);
    });
}
}
