<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login( LoginRequest $request )
    {

        $credentials = $request->validated();

        // VERIFICAR CORREO Y CONTRASEÑA
        if ( !Auth::attempt($credentials) )
        {
            return response()->json([
                "message" => "Credenciales incorrectas"
            ], 401);
        }

        $user = User::find( Auth::user()['id'] );

        // CREAR TOKEN PARA USUARIO
        $token = $user->createToken("token")->plainTextToken;

        // RETORNAR TOKEN Y USUARIO
        return response()->json([
            "user" => $user,
            "token" => $token 
        ]);

    }

    public function logout( Request $request )
    {
        
    }

    public function register()
    {

    }

    public function checkToken( Request $request )
    {
        
    }


}
