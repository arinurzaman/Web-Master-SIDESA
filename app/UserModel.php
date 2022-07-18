<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    public function login($nik,$password)
    {
        $query = DB::table('users')
            ->select('*')
            ->where(array(  'users.nik'	=> $nik,
                            'users.password'    => sha1($password)))
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
