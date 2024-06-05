<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];
    
    /**
     * The films that belong to the genre.
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class);
    }
    
    /**
     * The users that belong to the genre.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
