<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Function : hasMany States
     * @relationType : hasMany
     */
    public function states() {
        return $this->hasMany(State::class);
    }

    /**
     * Function : hasManyThrough Relation
     * @relationType : hasManyThrough
     */
    public function cities()
    {
        return $this->hasManyThrough(
            City::class,
            State::class,
            'country_id', // Foreign key on state table...
            'state_id', // Foreign key on city table...
            'id',   // Local key on country table
            'id'   // Local key on state table
        );
    }
}
