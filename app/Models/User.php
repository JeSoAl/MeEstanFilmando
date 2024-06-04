<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'suscription',
        'admin',
        'avatar_id',
        'suscription_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the avatar that owns the user.
     */
    public function avatar(): BelongsTo
    {
        return $this->belongsTo(Avatar::class);
    }

    /**
     * Get the suscription that owns the user.
     */
    public function suscription(): BelongsTo
    {
        return $this->belongsTo(Suscription::class);
    }
    
    /**
     * The cards that belong to the user.
     */
    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class);
    }
    
    /**
     * The films that belong to the user.
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(film::class);
    }
}
