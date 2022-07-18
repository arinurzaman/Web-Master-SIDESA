<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $fillable = ['no_surat','nama_ibu','umur_ibu','pekerjaan_ibu','nama_suami','umur_suami','pekerjaan_suami','alamat_suami','tgl_lahir_anak','jam_lahir','nama_anak','jk_anak','bb_anak','pb_anak','tempat_lahir','anak_ke','agama','status'];
}
