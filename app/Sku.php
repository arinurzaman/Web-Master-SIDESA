<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    protected $table = 'sku';
    protected $fillable = ['no_surat','nik','nama', 'umur', 'alamat', 'no_hp', 'nama_usaha','status'];
}
