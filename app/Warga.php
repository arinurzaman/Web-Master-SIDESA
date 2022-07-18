<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir','email', 'jenis_kelamin', 'usia', 'alamat'];
}
