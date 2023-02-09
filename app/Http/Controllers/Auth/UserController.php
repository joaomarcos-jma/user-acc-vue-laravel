<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $service)
    {
        $this->userService = $service;
    }

    public function register(UserRegisterRequest $request)
    {
        return $this->userService->register($request);
    }
}
