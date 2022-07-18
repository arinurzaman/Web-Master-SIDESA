<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Kematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KematianController extends Controller
{
    public function tambah (Request $request) {
        $validasi = Validator::make($request->all(), [
            'nama_pelapor'          => 'required',
            'umur_pelapor'          => 'required',
            'pekerjaan_pelapor'     => 'required',
            'alamat_pelapor'        => 'required',
            'agama_pelapor'         => 'required',
            'nik_pelapor'           => 'required',
            'nama_jenazah'          => 'required',
            'jk_jenazah'            => 'required',
            'tempat_lahir_jenazah'  => 'required',
            'tanggal_lahir_jenazah' => 'required',
            'agama_jenazah'         => 'required',
            'ayah_jenazah'          => 'required',
            'ibu_jenazah'           => 'required',
            'alamat_jenazah'        => 'required',
            'hari_meninggal'        => 'required',
            'tanggal_meninggal'     => 'required',
            'tempat_meninggal'      => 'required'

        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $tambah = Kematian::create($request->all());

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
