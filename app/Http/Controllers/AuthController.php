<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginForm');
    }

    public function getAuthenticatedUser()
    {
        return Auth::user();
    }
}
