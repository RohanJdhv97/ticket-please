<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;

class AuthController extends Controller
{
    use ApiResponses;
    public function login(LoginRequest $request) {
        return $this->success('Login Success '. $request->email);
    }

    public function register(RegisterRequest $request){
        return $this->success('Register Success '. $request->name);
    }
}
