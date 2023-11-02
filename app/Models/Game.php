<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "releaseDate",
        "price",
        "g_image",
        "system_requirement",
        "processor",
        "gpu",
        "ram",
        "storage",
    ];

    public function genres()
    {
        return $this ->belongsToMany(Genre::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class, 'rating_id');
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class,'franchise_id');
    }
}


