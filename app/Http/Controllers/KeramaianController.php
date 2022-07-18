<?php

namespace App\Http\Controllers;

use App\Keramaian;
use Illuminate\Http\Request;

class KeramaianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_keramaian = \App\Keramaian::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_keramaian = \App\Keramaian::all();
            $data_keramaian = $data_keramaian->SortByDesc('created_at');
        }
        return view('admin.keramaian.pengajuan_keramaian', ['data_keramaian' => $data_keramaian]);
    }

    public function detail($id)
    {
        $data = array(
            'keramaian' => Keramaian::findOrFail($id)
        );
        return view('admin.keramaian.detail_keramaian', $data);
    }

    public function delete($id)
    {
        $keramaian = \App\Keramaian::find($id);
        $keramaian->delete($keramaian);
        return redirect('/keramaian')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $keramaian = \App\Keramaian::find($id);
        return view('admin.keramaian.edit_keramaian', ['keramaian' => $keramaian]);
    }

    public function update(Request $request, $id)
    {
        $keramaian = \App\Keramaian::find($id);
        $keramaian->update($request->all());
        return redirect('/keramaian')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'keramaian' => Keramaian::findOrFail($id)
        );
        return view('admin.keramaian.keramaianPdf', $data);
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
        $keramaian = Keramaian::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Keramaian" . " Sedang Diproses");
        $keramaian->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('keramaian');
    }

    public function tolak($id){
        $keramaian = Keramaian::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Keramaian" . " Ditolak");
        $keramaian->update([
            'status' => "Ditolak"
        ]);
        return redirect('keramaian');
    }

    public function selesai($id){
        $keramaian = Keramaian::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Keramaian" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $keramaian->update([
            'status' => "Selesai"
        ]);
        return redirect('keramaian');
    }
}
