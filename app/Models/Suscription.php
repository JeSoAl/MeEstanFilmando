<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Suscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'price',
        'type',
        'duration'
    ];

    /**
     * Casting attributes
     */
    protected $casts = [
        'created_at' => 'date'
    ];

    /* Constants */
    /* Different types for a fee */
    const TYPE_WEEK = 'week';
    const TYPE_MONTH = 'month';
    const TYPE_YEAR = 'year';
    const TYPES = [
        self::TYPE_WEEK,
        self::TYPE_MONTH,
        self::TYPE_YEAR,
    ];

    /**
    * Return all types with their labels
    * @return array
    */
    public static function allTypesWithLabels() {
        return [
            self::TYPE_WEEK => 'Semana',
            self::TYPE_MONTH => 'Mes',
            self::TYPE_YEAR => 'Año',
        ];
    }

    /**
     * Get the users for the suscription.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
