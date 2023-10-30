<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function residents(): HasMany
    {
        return $this->hasMany(Resident::class);
    }

    public function taxiCompanies(): HasMany
    {
        return $this->hasMany(TaxiCompany::class);
    }
}
