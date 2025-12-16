<?php

<<<<<<< HEAD
namespace App\Http\Controllers;

=======
namespace App\Http\Controllers; 
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Http\Resources\UserRecource;
use App\Helpers\ResponseHelper;
>>>>>>> a7da4db (first commit)
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
     private UserRepositoryInterfaces $userRepository;

    public function __construct(UserRepositoryInterfaces $userRepository)
=======
     private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
>>>>>>> a7da4db (first commit)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try{
            $users = $this->userRepository->getAll(
                $request->search,
                $request->limit,
                true
            );
            return ResponseHelper::jsonResponse(
                true,
                 'Data User Berhasil Diambil',
                UserRecource::collection($users),
                200
            );
        } catch (\Exception $e) {
            return ResponseHelper::jsonResponse(
                false,
                null,
                $e->getMessage(),
                500
            );
             
        }
    }

    public function getAllPaginated(Request $request)
    {
        $request = $request->validate([
            'search' => 'nullable|string',
            'row_per_page' => 'required|integer',
        ]);
        try{
            $users = $this->userRepository->getAllPaginated(
                $request['searh'] ?? null,
                $request['row_per_page'],
                true
            );
            return ResponseHelper::jsonResponse(
                true,
                 'Data User Berhasil Diambil',
                Paginated::make($users, UserRecource::class),
                200
            );
        } catch (\Exception $e) {
            return ResponseHelper::jsonResponse(
                false,
                null,
                $e->getMessage(),
                500
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
