<?php

namespace Swandam\Core\Http\Controllers;

use Swandam\Core\Http\Controllers\Controller;
use Swandam\Core\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show()
    {
        return view('swandam::auth.login');
    }

    public function login(LoginRequest $request)
    {
        dd($request->all());
    }
}
