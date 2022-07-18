<?php

namespace App\Http\Controllers;

use App\BelumMenikah;
use Illuminate\Http\Request;

class BlmnikahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_blmnikah = \App\BelumMenikah::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_blmnikah = \App\BelumMenikah::all();
            $data_blmnikah = $data_blmnikah->SortByDesc('created_at');
        }
        return view('admin.blmnikah.pengajuan_blmnikah', ['data_blmnikah' => $data_blmnikah]);
    }

    public function detail($id)
    {
        $data = array(
            'blmnikah' => BelumMenikah::findOrFail($id)
        );
        return view('admin.blmnikah.detail_blmnikah', $data);
    }

    public function delete($id)
    {
        $blmnikah = \App\BelumMenikah::find($id);
        $blmnikah->delete($blmnikah);
        return redirect('/blmnikah')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $blmnikah = \App\BelumMenikah::find($id);
        return view('admin.blmnikah.edit_blmnikah', ['blmnikah' => $blmnikah]);
    }

    public function update(Request $request, $id)
    {
        $blmnikah = \App\BelumMenikah::find($id);
        $blmnikah->update($request->all());
        return redirect('/blmnikah')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'blmnikah' => BelumMenikah::findOrFail($id)
        );
        return view('admin.blmnikah.blmnikahPdf', $data);
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
        $blmnikah = BelumMenikah::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Belum Menikah" . " Sedang Diproses");
        $blmnikah->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('blmnikah');
    }

    public function tolak($id){
        $blmnikah = BelumMenikah::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Belum Menikah" . " Ditolak");
        $blmnikah->update([
            'status' => "Ditolak"
        ]);
        return redirect('blmnikah');
    }

    public function selesai($id){
        $blmnikah = BelumMenikah::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Belum Menikah" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $blmnikah->update([
            'status' => "Selesai"
        ]);
        return redirect('blmnikah');
    }
}
