<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class USerController extends Controller
{
    public function index()
    {

            // Get all products from the database.
            $users = User::all();

            // Return the users to the view.
            return view('user.profile', compact('users'));

    }


    public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email,' . $request->user()->id,
        'password' => 'nullable|min:6|confirmed',
        'phone' => 'required|string',
        'address' => 'required|string',
    ]);

    $user = $request->user();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    $user->address = $request->input('address');

    if ($request->input('password')) {
        $user->password = Hash::make($request->input('password'));
    }

    $user->save();

    return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
}

}
