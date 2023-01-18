<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function createAccount(Request $data)
    {
        $data->validate([
            'name' => 'required', 'string', 'max:55','unique:users,name',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:4', 'confirmed',
        ]);

    $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
             'password' => Hash::make($data['password']),
        ]);

        if ($user) {
            Profile::create([
                'user_id' => $user->id,
            ]);

            return redirect('/login')->with('message','Registration successful! Login to continue');

        }
    }
}
