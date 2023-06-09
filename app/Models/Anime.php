<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anime extends Model
{
    //protected $table=['animes'];
    protected $fillable=['name','genre','type','episodes','rating','members',
    ];
    use HasFactory;
    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

}
