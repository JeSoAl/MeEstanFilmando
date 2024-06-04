<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Ffilmies\HasFfilmy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Award extends Model
{
    use HasFfilmy;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];
    
    /**
     * The directors that belong to the award.
     */
    public function directors(): BelongsToMany
    {
        return $this->belongsToMany(Director::class);
    }
    
    /**
     * The actors that belong to the award.
     */
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(actor::class);
    }
    
    /**
     * The films that belong to the award.
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(film::class);
    }
}
