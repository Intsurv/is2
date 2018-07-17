<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'barcode', 'kategorie', 'anzahl', 'user_id'
    ];

    /**
     * Get the user who owns/created the turnovers.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
