<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable=[];

    public function resort()
    {
        return $this->belongsTo(Resort::class);
    }
}
