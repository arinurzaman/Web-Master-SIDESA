<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keramaian extends Model
{
    protected $table = 'keramaian';
    protected $fillable = ['no_surat','nik', 'nama_lengkap', 'umur', 'pekerjaan', 'alamat', 'tgl_keramaian','tempat_keramaian','kegiatan','status'];
}
