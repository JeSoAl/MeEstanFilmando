<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

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
        return $this->belongsToMany(Film::class);
    }
    
    /**
     * The awards that belong to the actor.
     */
    public function awards(): BelongsToMany
    {
        return $this->belongsToMany(Award::class);
    }
    
    /**
     * The users that belong to the actor.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
