<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function registerForm()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $user = $this->createUser($request->all());

        Auth::login($user);

        return redirect()->route('loginForm');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if(Auth::attempt($credentials))
        {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('Product');
            } else {
                return redirect('products');
            }        }

    // Redirect the user to the landing page.
    return redirect('/home');
}




    private function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
    }
}

