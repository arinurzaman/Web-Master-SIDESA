<?php

namespace App\Http\Controllers;

use PDF;
use App\Domisili;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DomisiliController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_domisili = \App\Domisili::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_domisili = \App\Domisili::all();
            $data_domisili = $data_domisili->SortByDesc('created_at');
            // $data_domisili = Carbon::now()->isoFormat('dddd, D MMMM Y');
        }
        return view('admin.domisili.pengajuan_domisili', ['data_domisili' => $data_domisili]);
    }

    public function detail($id)
    {
        $data = array(
            'domisili' => Domisili::findOrFail($id)
        );
        return view('admin.domisili.detail_domisili', $data);
    }

    public function delete($id)
    {
        $domisili = \App\Domisili::find($id);
        $domisili->delete($domisili);
        return redirect('/domisili')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $domisili = \App\Domisili::find($id);
        return view('admin.domisili.edit_domisili', ['domisili' => $domisili]);
    }

    public function update(Request $request, $id)
    {
        $domisili = \App\Domisili::find($id);
        $domisili->update($request->all());
        return redirect('/domisili')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'domisili' => Domisili::findOrFail($id)
        );
        return view('admin.domisili.domisiliPdf', $data);
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
        $domisili = Domisili::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Domisili" . " Sedang Diproses");
        $domisili->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('domisili');
    }

    public function tolak($id){
        $domisili = Domisili::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Domisili" . " Ditolak");
        $domisili->update([
            'status' => "Ditolak"
        ]);
        return redirect('domisili');
    }

    public function selesai($id){
        $domisili = Domisili::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Domisili" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $domisili->update([
            'status' => "Selesai"
        ]);
        return redirect('domisili');
    }
}
