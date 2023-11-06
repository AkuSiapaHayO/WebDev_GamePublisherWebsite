<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "r_image",
    ] ;

    public function games()
    {
        return $this->hasMany(Game::class, 'rating_id');
    }
}
