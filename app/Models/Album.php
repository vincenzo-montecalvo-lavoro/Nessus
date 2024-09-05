<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artist',
    ];

    public function covers(): HasMany
    {
        return $this->hasMany(Cover::class);
    }

    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }

    protected function casts(): array
    {
        return [
            'options' => 'array',
        ];
    }
}
