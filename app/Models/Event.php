<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use softDeletes, UUID;
    protected $fillabel = [
        'thumbnail',
        'name',
        'description',
        'price',
        'date',
        'time',
        'is_active',
    ];

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class);
    }
}
