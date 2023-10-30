<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }

    public function taxiCompany(): BelongsTo
    {
        return $this->belongsTo(TaxiCompany::class);
    }
}
