<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use App\Imports\WargaImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_warga = \App\Warga::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_warga = \App\Warga::all();
            $data_warga = $data_warga->SortByDesc('created_at');
        }
        return view('admin.warga.data_warga', ['data_warga' => $data_warga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'warga';
        $user->name = $request->nama;
        $user->nik = $request->nik;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = Str::random(50);
        $user->save();

        $warga = new Warga;
        $warga->nik = $request->nik;
        // $warga->user_id = $user->id;
        $warga->nama = $request->nama;
        $warga->tempat_lahir = $request->tempat_lahir;
        $warga->tanggal_lahir = $request->tanggal_lahir;
        $warga->email = $request->email;
        $warga->jenis_kelamin = $request->jenis_kelamin;
        $warga->usia = $request->usia;
        $warga->alamat = $request->alamat;
        $warga->avatar = $request->avatar;
        $warga->save();

        return redirect('/warga')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function detail($id)
    {
        $data = array(
            'warga' => Warga::findOrFail($id)
        );
        return view('admin.warga.detail_warga', $data);
    }

    public function edit($id)
    {
        $warga = \App\Warga::find($id);
        return view('admin.warga.edit_warga', ['warga' => $warga]);
    }

    public function update(Request $request, $id)
    {
        $warga = \App\Warga::find($id);
        $warga->update($request->all());
        return redirect('/warga')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $warga = \App\Warga::find($id);
        $warga->delete($warga);
        return redirect('/warga')->with('sukses', 'Data berhasil dihapus');
    }

    public function download()
    {
        return response()->download(public_path('Download/format-data-warga.xlsx'));
    }

    public function wargaimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataWarga', $namaFile);

        Excel::import(new WargaImport, public_path('/DataWarga/' . $namaFile));
        return redirect('/warga')->with('sukses', 'Data berhasil ditambahkan');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
