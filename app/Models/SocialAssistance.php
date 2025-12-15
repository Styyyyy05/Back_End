<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAssistance extends Model
{
    use softDeletes, UUID;
    protected $fillabel = [
        'thumbnail',
        'name',
        'category',
        'amount',
        'provider',
        'description',
        'is_available',
        
    ];
    public function socialAssistanceRecipients()
    {
        return $this->hasMany(SocialAssistanceRecipient::class);
    }
}
