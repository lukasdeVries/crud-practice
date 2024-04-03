<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function country() {
        return $this->hasManny(Country::class);
    }

    public function universe() {
        return $this->belongsTo(Universe::class);
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
