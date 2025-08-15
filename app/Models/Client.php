<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'user_id'
    ];

    public function equipment(): HasMany
    {
        return $this->hasMany(Equipment::class);
    }
}
