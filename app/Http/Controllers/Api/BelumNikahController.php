<?php

namespace App\Http\Controllers\Api;

use App\BelumMenikah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BelumNikahController extends Controller
{
    public function tambah (Request $request) {
        $validasi = Validator::make($request->all(), [
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $tambah = BelumMenikah::create($request->all());

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
