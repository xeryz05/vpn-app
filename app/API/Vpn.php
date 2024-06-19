<?php
namespace App\API;

class Vpn {
   public function getVpn() {

    $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fecoretech.com/api/dummy",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => [
                "User-Agent: insomnia/9.2.0"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $jsonDecode = json_decode($response);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $jsonDecode;
        }
    }
}