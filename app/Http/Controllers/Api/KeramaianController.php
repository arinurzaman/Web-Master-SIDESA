<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Keramaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KeramaianController extends Controller
{
    public function tambah (Request $request) {
        $validasi = Validator::make($request->all(), [
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'tgl_keramaian' => 'required',
            'tempat_keramaian' => 'required',
            'kegiatan' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $tambah = Keramaian::create($request->all());

        if ($tambah) {
            return response()->json([
                'success' => 1,
                'message' => 'Data berhasil ditambahkan',
                'tambah'  => $tambah
            ]);
        }

        return $this->error('Data tidak ditambahkan');
    }

    public function error($pesan){
        return response()->json([
            'success' => 0,
            'message' => $pesan
        ]);
    }
}
