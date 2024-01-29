<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request){
        try{
            $validatedData = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            $role = User::where('username', $validatedData['username'])->pluck('role');

            if($role[0] === 'member'){
                if(!Auth::attempt($validatedData)){
                    return response()->json([
                        'message' => 'Username atau Password Salah!'
                    ], 401);
                    
                }

                $user = User::where('username', $request->username)->firstOrFail();
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'message' => 'Login success',
                    'data' => $user,
                    'access_token' => $token,
                ]);
            }else{
                return response()->json(['message' => 'Tidak dapat menggunakan selain mahasiswa']);
            }

        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
