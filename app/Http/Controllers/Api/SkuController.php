<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkuController extends Controller
{
    public function tambah (Request $request) {
        $validasi = Validator::make($request->all(), [
            'nik'   => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'nama_usaha' => 'required'
        ]);

        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $tambah = Sku::create($request->all());

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
