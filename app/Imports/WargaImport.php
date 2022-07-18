<?php

namespace App\Imports;

use App\Warga;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class WargaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user = new \App\User;
        $user->role = 'warga';
        $user->nik = $row[0];
        $user->name = $row[1];
        $user->email = $row[4];
        $user->password = bcrypt('12345678');
        $user->remember_token = Str::random(50);
        $user->save();

        return new Warga([
            'nik' => $row[0],
            'nama' => $row[1],
            'tempat_lahir' => $row[2],
            'tanggal_lahir' => $row[3],
            'email' => $row[4],
            'jenis_kelamin' => $row[5],
            'usia' => $row[6],
            'alamat' => $row[7],

        ]);
    }
}
