<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;

class Stop extends Model
{
    use HasFactory;

    // relatione many to one
    public function day() {
        return $this->belongsTo(Day::class);
    }
}
