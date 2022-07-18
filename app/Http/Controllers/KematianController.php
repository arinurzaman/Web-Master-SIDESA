<?php

namespace App\Http\Controllers;

use App\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_kematian = \App\Kematian::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kematian = \App\Kematian::all();
            $data_kematian = $data_kematian->SortByDesc('created_at');
        }
        return view('admin.kematian.pengajuan_kematian', ['data_kematian' => $data_kematian]);
    }

    public function detail($id)
    {
        $data = array(
            'kematian' => Kematian::findOrFail($id)
        );
        return view('admin.kematian.detail_kematian', $data);
    }

    public function delete($id)
    {
        $kematian = \App\Kematian::find($id);
        $kematian->delete($kematian);
        return redirect('/kematian')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $kematian = \App\Kematian::find($id);
        return view('admin.kematian.edit_kematian', ['kematian' => $kematian]);
    }

    public function update(Request $request, $id)
    {
        $kematian = \App\Kematian::find($id);
        $kematian->update($request->all());
        return redirect('/kematian')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'kematian' => Kematian::findOrFail($id)
        );
        return view('admin.kematian.kematianPdf', $data);
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
        $kematian = Kematian::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Kematian" . " Sedang Diproses");
        $kematian->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('kematian');
    }

    public function tolak($id){
        $kematian = Kematian::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Kematian" . " Ditolak");
        $kematian->update([
            'status' => "Ditolak"
        ]);
        return redirect('kematian');
    }

    public function selesai($id){
        $kematian = Kematian::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Kematian" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $kematian->update([
            'status' => "Selesai"
        ]);
        return redirect('kematian');
    }
}
