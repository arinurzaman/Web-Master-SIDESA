<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    protected $table = 'domisili';
    protected $fillable = ['no_surat','nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan', 'agama', 'pekerjaan', 'alamat','status'];

    // public function user(){
    //     return $this->belongsTo(User::class, "user_id", "id");
    // }
}
