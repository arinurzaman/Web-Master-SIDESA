<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelahiranController extends Controller
{
    public function tambah (Request $request) {
        $validasi = Validator::make($request->all(), [
            'nama_ibu'           => 'required',
            'umur_ibu'           => 'required',
            'pekerjaan_ibu'      => 'required',
            'nama_suami'         => 'required',
            'umur_suami'         => 'required',
            'pekerjaan_suami'    => 'required',
            'alamat_suami'       => 'required',
            'tgl_lahir_anak'     => 'required',
            'jam_lahir'          => 'required',
            'nama_anak'          => 'required',
            'jk_anak'            => 'required',
            'bb_anak'            => 'required',
            'pb_anak'            => 'required',
            'tempat_lahir'       => 'required',
            'anak_ke'            => 'required',
            'agama'              => 'required'

        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $tambah = Kelahiran::create($request->all());

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
