<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\tokens;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    //
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',

        ]);

        $user =  User::create(
            [
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password'])
            ]
        );

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response($response, 201);
    }

    public function logout(Request $request)
    {
        // Get user who requested the logout
        $user = request()->user(); //or Auth::user()

        // Revoke current user token
        $user->tokens()
            ->where('id', $user->currentAccessToken()
                ->id)->delete();
        return ['message' => 'Logged out'];
    }

    public function login(Request $request)
    {
        $fields = $request->validate([

            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',

        ]);
        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['message' => 'Bad login boy!'], 401);
        };

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response($response, 201);
    }
}
