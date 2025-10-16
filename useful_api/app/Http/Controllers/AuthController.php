<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    
    //  affichage de la liste des utilisateurs 
    public function index()
    {
        return  response()->json(User::latest()->get());
    }

    //  authentification
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
           
        ]);

        $token = $user->createToken('inventoryapp')->plainTextToken;

        $response = [
            'user' => $user,
            'token'=> $token
        ];

        return response($response, 201);
      
    }

    //  connexion
    public function login(Request $request)
    { 
        $fields = $request->validate([
            'email' => 'required|email|unique:users|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $fields['email'])->first();

        $token = $user->createToken('inventoryapp')->plainTextToken;
  
        if (! $user || ! Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'message' => 'Identifiants invalides'
            ], 401);
        }else {
            return response()->json([
                'message' => 'Connexion réussie',
                'data' => $user,
                'token' => $token,
            ], 200);
        }
        
    }

}