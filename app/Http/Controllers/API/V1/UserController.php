<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function index(Request $request)
    {
        if($this->include('tickets')){
            return UserResource::collection(User::with('tickets')->get());
        }
        return UserResource::collection(User::paginate());
    }

    public function show(User $user)
    {
        if($this->include('tickets')){
            return new UserResource($user->load('tickets'));
        }
        return new UserResource($user);
    }
}
