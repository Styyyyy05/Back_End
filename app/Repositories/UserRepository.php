<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    ) {
        $query = User::where(function ($query) use ($search) {
            //jika ada parameter search dia akan melakukan search yang di definisikan pada model user
            if ($search){
                $squery->search($search);
            }
        });
            //take adalah mengambil beberapa berdasarkan limit
        if ($limit) {
            $query->take($limit);
        }

        if ($execute) {
            return $query->get();
        }

        return $query;
    }
    
    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage
        )    
    {
        $query = $thisgetAll(
            $search,
            $rowPage,
            false
            );

        return $query->paginate($rowPerPage);
    }
}