<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use softDeletes, UUID;
    protected $fillabel = [
        'event_id',
        'head_family_id',
        'quantity',
        'total_price',
        'payment_status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function headOfFamily()
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
}
