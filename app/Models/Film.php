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
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'films';

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
        return $this->belongsToMany(Genre::class, 'film_genres');
    }
    
    /**
     * The actors that belong to the film.
     */
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'film_actors');
    }
    
    /**
     * The awards that belong to the film.
     */
    public function awards(): BelongsToMany
    {
        return $this->belongsToMany(Award::class, 'film_awards');
    }
    
    /**
     * The platforms that belong to the film.
     */
    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class, 'film_platforms');
    }
    
    /**
     * The users that don´t belong to the film.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'film_users');
    }

    public function actor_ids() {
        $actors = [];
        $i = 0;
        foreach ($this->actors as $actor) {
                $actors[$i] = $actor->id;
                $i++;
        }
        return $actors;
    }
}
