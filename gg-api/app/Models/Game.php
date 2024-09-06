<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'franchise',
        'release_year',
        'editor',
        'category_id',
        'igdb_id', // Added igdb_id
    ];

    /**
     * Get the genre that the game belongs to.
     *
     * This function defines an inverse many-to-many relationship
     * between the Game model and the Genre model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    /**
     * Get the questions for the game.
     *
     * This function defines a one-to-many relationship
     * between the Game model and the Question model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
