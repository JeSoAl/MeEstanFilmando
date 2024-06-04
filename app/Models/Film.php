<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'original',
        'description',
        'duration',
        'year',
        'position',
        'picture',
        'director_id'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];

    /**
     * Get the comments for the film.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the director that owns the film.
     */
    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class);
    }
    
    /**
     * The genres that belong to the film.
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
    
    /**
     * The actors that belong to the film.
     */
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class);
    }
    
    /**
     * The awards that belong to the film.
     */
    public function awards(): BelongsToMany
    {
        return $this->belongsToMany(Award::class);
    }
    
    /**
     * The platforms that belong to the film.
     */
    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }
}
