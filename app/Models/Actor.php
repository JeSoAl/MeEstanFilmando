<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'actors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'birthdate',
        'country'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'birthdate' => 'date',
        'created_at' => 'date'
    ];
    
    /**
     * The films that belong to the actor.
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_actors');
    }
    
    /**
     * The awards that belong to the actor.
     */
    public function awards(): BelongsToMany
    {
        return $this->belongsToMany(Award::class, 'actor_awards');
    }
    
    /**
     * The users that belong to the actor.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_actors');
    }
}
