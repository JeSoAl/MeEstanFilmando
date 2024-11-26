<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Director extends Model
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
     * Get the films for the director.
     */
    public function films(): HasMany
    {
        return $this->hasMany(Film::class);
    }
    
    /**
     * The awards that belong to the director.
     */
    public function awards(): BelongsToMany
    {
        return $this->belongsToMany(Award::class);
    }

    public function award_ids() {
        $awards = [];
        $i = 0;
        foreach ($this->awards as $award) {
            if ($award->pivot->type == true) {
                $awards[$i] = $award->id;
                $i++;
            }
        }
        return $awards;
    }
}
