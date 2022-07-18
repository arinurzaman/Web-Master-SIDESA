<?php

namespace App\Http\Controllers;

use App\Kelahiran;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_kelahiran = \App\Kelahiran::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kelahiran = \App\Kelahiran::all();
            $data_kelahiran = $data_kelahiran->SortByDesc('created_at');
        }
        return view('admin.kelahiran.pengajuan_kelahiran', ['data_kelahiran' => $data_kelahiran]);
    }

    public function detail($id)
    {
        $data = array(
            'kelahiran' => Kelahiran::findOrFail($id)
        );
        return view('admin.kelahiran.detail_kelahiran', $data);
    }

    public function delete($id)
    {
        $kelahiran = \App\Kelahiran::find($id);
        $kelahiran->delete($kelahiran);
        return redirect('/kelahiran')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $kelahiran = \App\Kelahiran::find($id);
        return view('admin.kelahiran.edit_kelahiran', ['kelahiran' => $kelahiran]);
    }

    public function update(Request $request, $id)
    {
        $kelahiran = \App\Kelahiran::find($id);
        $kelahiran->update($request->all());
        return redirect('/kelahiran')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'kelahiran' => Kelahiran::findOrFail($id)
        );
        return view('admin.kelahiran.kelahiranPdf', $data);
    }

    public function pushNotif($title, $message) {


        $mData = [
            'title' => $title,
            'body' => $message
        ];

        $fcm[] = "c8qdtUubQ4Ok3bSzNbnOKu:APA91bG__x8frP6jh3VeE-Obnrq_ObCdvvJUORsc88UetX2ysHjnEKJeM075VBzaWNiWevSPciaLp5dpQwetZnimKSJIqV7As8pcFehkCLS0eWDlaxwnoBAN7VI3DtWEjesD8tZ98qmF";

        $payload = [
            'registration_ids' => $fcm,
            'notification' => $mData
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Content-type: application/json",
                "Authorization: key=AAAAY-Dt9SE:APA91bGmDppvbSyohoMMEAf-bojNshhjFEXY1lzNzbzi5NyfqfpP7naNueOZAd-FGHLh6FzlbfM_80Y54tilWVxmwBICtbVt5BfuerrVw1M6QuTMr-Yb54Jh_3qZ6E4-q-7JmwihnKLg"
            ),
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));

        $response = curl_exec($curl);
        curl_close($curl);

        $data = [
            'success' => 1,
            'message' => "Push notif success",
            'data' => $mData,
            'firebase_response' => json_decode($response)
        ];
        return $data;
    }

    public function confirm($id){
        $kelahiran = Kelahiran::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Kelahiran" . " Sedang Diproses");
        $kelahiran->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('kelahiran');
    }

    public function tolak($id){
        $kelahiran = Kelahiran::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Kelahiran" . " Ditolak");
        $kelahiran->update([
            'status' => "Ditolak"
        ]);
        return redirect('kelahiran');
    }

    public function selesai($id){
        $kelahiran = Kelahiran::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Kelahiran" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $kelahiran->update([
            'status' => "Selesai"
        ]);
        return redirect('kelahiran');
    }
}
