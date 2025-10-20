<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    use ApiResponses;

    public function login()
    {
        return $this->ok('Hello Login');
    }
}
