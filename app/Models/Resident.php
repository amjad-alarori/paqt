<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resident extends Model
{
    use HasFactory;

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function budget(): HasOne // Define a one-to-one relationship with Budget
    {
        return $this->hasOne(Budget::class);
    }
}
