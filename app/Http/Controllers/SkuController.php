<?php

namespace App\Http\Controllers;

use App\Sku;
use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_sku = \App\Sku::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_sku = \App\Sku::all();
            $data_sku = $data_sku->SortByDesc('created_at');
        }
        return view('admin.sku.pengajuan_sku', ['data_sku' => $data_sku]);
    }

    public function detail($id)
    {
        $data = array(
            'sku' => Sku::findOrFail($id)
        );
        return view('admin.sku.detail_sku', $data);
    }

    public function delete($id)
    {
        $sku = \App\Sku::find($id);
        $sku->delete($sku);
        return redirect('/sku')->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $sku = \App\Sku::find($id);
        return view('admin.sku.edit_sku', ['sku' => $sku]);
    }

    public function update(Request $request, $id)
    {
        $sku = \App\Sku::find($id);
        $sku->update($request->all());
        return redirect('/sku')->with('sukses', 'Data berhasil diupdate');
    }

    public function cetakPdf($id){
        $data = array(
            'sku' => Sku::findOrFail($id)
        );
        return view('admin.sku.skuPdf', $data);
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
        $sku = Sku::find($id);
        $this->pushNotif('Pengajuan Diproses', "Pengajuan Surat Sku" . " Sedang Diproses");
        $sku->update([
            'status' => "Menunggu Konfirmasi"
        ]);
        return redirect('sku');
    }

    public function tolak($id){
        $sku = Sku::find($id);
        $this->pushNotif('Pengajuan Ditolak', "Pengajuan Surat Sku" . " Ditolak");
        $sku->update([
            'status' => "Ditolak"
        ]);
        return redirect('sku');
    }

    public function selesai($id){
        $sku = Sku::find($id);
        $this->pushNotif('Pengajuan Selesai', "Pengajuan Surat Sku" . " Sudah Dapat Diambil di Kantor Kelurahan");
        $sku->update([
            'status' => "Selesai"
        ]);
        return redirect('sku');
    }
}
