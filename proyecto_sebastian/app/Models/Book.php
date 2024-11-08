<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'titul',
        "genero",
        "publicacion",
        'author_id',
        'editorial_id',
    ];

    public function autor () {
        return $this->belongsTo(Autor::class);
    }

    public function editorial () {
        return $this->belongsTo(Editorial::class);
    }
}
