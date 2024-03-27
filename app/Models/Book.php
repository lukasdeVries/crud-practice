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

    public function characters() {
        return $this->belongsToMany(Character::class, 'book_character', 'character_id', 'book_id');
    }
}
