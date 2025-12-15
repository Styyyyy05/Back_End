<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use SoftDeletes, UUID;
    protected $fillable = [
        'thumbnail',
        'name',
        'about',
        'headman',
        'people',
        'argicultural_area',
        'total_area',
    ];

    public function images()
    {
        return $this->hasMany(ProfileImage::class);
    }
}
