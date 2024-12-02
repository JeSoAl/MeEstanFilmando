<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class FilmUser extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'film_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'film_id',
        'status'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];

    /* Different statuses for a courses */
    const STATUS_DONTSHOW = 'dontshow';
    const STATUS_PINNED = 'pinned';
    const STATUSES = [
        self::STATUS_DONTSHOW,
        self::STATUS_PINNED
    ];

    /**
    * Return all statuses with their labels
    * @return array
    */
    public static function allStatusesWithLabels() {
        return [
            self::STATUS_DONTSHOW => 'no mostrar',
            self::STATUS_PINNED => 'fijado'
        ];
    }
}
