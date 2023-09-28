<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Nette\Schema\ValidationException;
use Illuminate\Http\Request;



class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'token'=> $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function logout()
    {
        //
    }


    public function register()
    {
        //
    }


}
