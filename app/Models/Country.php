<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function character() {
        return $this->hasMany(Character::class);
    }

    public function universe() {
        return $this->belongsTo(Universe::class);
    }
}
