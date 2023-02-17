<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/*
 *      Pouya Moradi  -> 9811041038
 *      Kimia Hoseyni -> 9811041012
 */
class UserApiController extends Controller
{
    //index => show users
    public function index()
    {
        return User::all();
    }
    //for create user by method post
    public function store()
    {
        return User::create([
            'name' => request('name'),
            'family' => request('family'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'password' => Hash::make(request('password'))
        ]);
    }

    //edit User
    public function update(User $user)
    {
        $user->update([
            'name' => request('name'),
            'family' => request('family'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
        ]);
        $user->save();
        return $user;
    }

//delete user
    public function destroy(User $user)
    {
        $success = $user->delete();
        return [
            'success' => $success
        ];
    }
}
