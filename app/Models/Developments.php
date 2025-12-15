<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developments extends Model
{
    use softDeletes, UUID;
    protected $fillable = [
        'thumbnail',
        'name',
        'description',
        'person_in_charge',
        'start_date',
        'end_date',
        'amount',
        'status',
    ];

    public function developmentApplicants()
    {
        return $this->hasMany(DevelopmenApplicant::class);
    }
}
