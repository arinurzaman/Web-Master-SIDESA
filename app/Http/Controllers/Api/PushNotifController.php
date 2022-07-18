<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PushNotifController extends Controller
{
    public function pushNotif(Request $requset) {


        $mData = [
            'title' => $requset->title,
            'body' => $requset->message
        ];

        $fcm[] = "c-QTv4AQSnOqbBIVlq9V-t:APA91bEE6Dz4O-nRCh7_Du9m8Geg71-sVuNUuuVTpy2P2ECJhuVYIpUNNjbAPa4xbH0a6PHfpAsx_WnJ-CUVHLevKy3PWZBVcEKIIx5-Ep4PR32mMvXCv55xTOLA_shjGUsCJ1j3viBD";

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
}
