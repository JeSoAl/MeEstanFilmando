<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Card extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'number',
        'cvv',
        'expiring_date'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'expiring_date' => 'date',
        'created_at' => 'date'
    ];
    
    /**
     * The users that belong to the card.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
