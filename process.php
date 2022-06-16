<?php
    require_once('vendor/autoload.php');

    $action = isset($_POST['action']) ? trim($_POST['action']) : '';
    switch ($action) {
        case 'GET_INFO':
            // echo 'SUCCESS'; exit();
            $address = isset($_POST['address']) ? trim($_POST['address']) : '';
            $tokenid = isset($_POST['tokenid']) ? trim($_POST['tokenid']) : '';

            // Building url
            $url = 'https://testnets-api.opensea.io/api/v1/asset/' . $address . '/' . $tokenid;

            $curl = curl_init();

            curl_setopt_array($curl, [
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              echo $response;
            }

            break;
        default: 
            break;
    }
?>