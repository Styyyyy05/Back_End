<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, UUID, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //Tambah scoope search tanpa ubah repository
    public function scopeSearch($query, $term)
    {
        return $query->where('name', 'like', '%' . $search . '%' )
                ->orWhere('name', 'like', '%' . $search . '%' );
        
    }

    public function HeadOfFamily()
    {
        return $this->hasOne(HeadOfFamily::class);
    }
    
    public function FamilyMember()
    {
        return $this->hasOne(FamilyMember::class);
    }

    public function developmenApplicants()
    {
        return $this->hasMany(DevelopmenApplicant::class);
    }
}
