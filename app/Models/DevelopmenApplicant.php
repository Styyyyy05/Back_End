<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmenApplicant extends Model
{
    use softDeletes, UUID;
    protected $fillabel = [
        'development_id',
        'user_id',
        'status',
    ];

    public function development()
    {
        return $this->belongsTo(Development::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
