<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Data yang anda isi salah atau belum di isi!', 'errors' => $validator->errors()], 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json(['message' => 'Login Berhasil!']);
        }

        return response()->json(['message' => 'Username atau Password salah!'], 401);
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => 'required',
        ]);
        $user = User::create($request->only("name", "email", "password"));

        if ($user) {
            return response()->json(['message' => "Register Berhasil!"]);
        }
        return response()->json(['message' => "Register Gagal!"]);
    }
}
