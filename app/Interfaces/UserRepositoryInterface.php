<<<<<<< HEAD
<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    );

    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage

    );

=======
<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    );

    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage

    );

>>>>>>> a7da4db (first commit)
    }