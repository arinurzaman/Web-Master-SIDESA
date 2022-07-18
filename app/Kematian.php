<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'kematian';
    protected $fillable = ['no_surat','nama_pelapor', 'umur_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor', 'agama_pelapor', 'nik_pelapor', 'nama_jenazah', 'jk_jenazah', 'tempat_lahir_jenazah','tanggal_lahir_jenazah','agama_jenazah','ayah_jenazah','ibu_jenazah','alamat_jenazah','hari_meninggal','tanggal_meninggal','tempat_meninggal','status'];
}
