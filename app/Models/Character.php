<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function books() {
        return $this->belongsToMany(Book::class, 'book_character', 'character_id', 'book_id');  
    }
    public function country() { 
        return $this->belongsTo(Country::class);
    }
}
