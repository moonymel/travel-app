<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stop;

class Day extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'preview_image'];

    // relazione uno a molti
    public function stops() {
        return $this->hasMany(Stop::class);
    }
}
