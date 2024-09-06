<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the games for the genre.
     *
     * This function defines a many-to-many relationship
     * between the Genre model and the Game model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}
