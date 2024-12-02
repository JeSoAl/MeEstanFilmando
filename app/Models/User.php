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
        'recomendation',
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
        return $this->belongsToMany(Film::class);
    }
    
    /**
     * The platforms that belong to the user.
     */
    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }
    
    /**
     * The genres that belong to the user.
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }
    
    /**
     * The directors that belong to the user.
     */
    public function directors(): BelongsToMany
    {
        return $this->belongsToMany(Director::class);
    }
    
    /**
     * The actors that belong to the user.
     */
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class);
    }

    public function genre_ids() {
        $genres = [];
        $i = 0;
        foreach ($this->genres as $genre) {
            if ($genre->pivot->type == true) {
                $genres[$i] = $genre->id;
                $i++;
            }
        }
        return $genres;
    }

    public function director_ids() {
        $directors = [];
        $i = 0;
        foreach ($this->directors as $director) {
            if ($director->pivot->type == true) {
                $directors[$i] = $director->id;
                $i++;
            }
        }
        return $directors;
    }

    public function actor_ids() {
        $actors = [];
        $i = 0;
        foreach ($this->actors as $actor) {
            if ($actor->pivot->type == true) {
                $actors[$i] = $actor->id;
                $i++;
            }
        }
        return $actors;
    }
}
