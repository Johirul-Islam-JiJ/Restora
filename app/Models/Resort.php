<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resort extends Model
{
    protected $guarded = [];
    protected $fillable=[];
    public function getImageAttribute($value): ?string
    {
        if($value)
            return asset('storage/'.$value);
        return null;
    }
    public function bookings():HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
