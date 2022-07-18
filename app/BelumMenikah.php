<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BelumMenikah extends Model
{
    protected $table = 'blmnikah';
    protected $fillable = ['no_surat','nik','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','pekerjaan','alamat','status'];
}
