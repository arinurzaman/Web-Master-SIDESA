<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('nik', $request->nik)->first();

        if($user){
            $user->update([
                'fcm' => $request->fcm
            ]);

            if(password_verify($request->password, $user->password)){
                return response()->json([
                    'success' => 1,
                    'message' => 'Selamat datang '.$user->name,
                    'user' => $user
                ]);
            }

            return $this->error('Password Salah');
            
        }

        return $this->error('NIK Tidak terdaftar');
    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
