<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([

            'name'         =>   'required',
            'email'        =>   'required|email|unique:user',
            'password'     =>   'required|min:6',
            'phone'        =>  'required|min:10|unique:user'

        ]);

        $data = $request->all();

        User::create([
            'name'     =>  $data['name'],
            'email'    =>  $data['email'],
            'phone'    =>  $data['phone'],
            'password' => Hash::make($data['password']
            )
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}

