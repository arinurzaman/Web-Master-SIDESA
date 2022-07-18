<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function cek(Request $request)
    {
        if(FacadesAuth::attempt($request->only('nik','password'))){
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout(){
        FacadesAuth::logout();
        return redirect('/');
    }
}
