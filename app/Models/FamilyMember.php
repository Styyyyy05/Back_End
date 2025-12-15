<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
     use softDeletes, UUID;
    protected $fillabel = [
        'head_of_family_id',
        'user_id',
        'profile_picture',
        'identity_number',
        'gender',
        'date_of_birth',
        'phone_number',
        'occupation',
        'marital_status',
        'relation',
    ];

    public function HeadofFamily()
{
    return $this->belongsTo(HeadofFamily::class);
}
    public function user()
{
    return $this->belongsTo(user::class);
}
}
