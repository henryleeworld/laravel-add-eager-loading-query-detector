<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname'];

    public function getFullnameAttribute()
    {
        return $this->name . ' ' . $this->lastname;
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
