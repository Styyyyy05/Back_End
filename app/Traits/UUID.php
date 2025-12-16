<<<<<<< HEAD
<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UUID
{
   public static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            if ($model->getKey() === null){
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
=======
<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UUID
{
   public static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            if ($model->getKey() === null){
                $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
>>>>>>> a7da4db (first commit)
