<?php
    $action = isset($_POST['action']) ? trim($_POST['action']) : '';

    switch ($action) {
        case 'GET_INFO':
            $address = isset($_POST['address']) ? trim($_POST['address']) : '';
            $tokenid = isset($_POST['tokenid']) ? trim($_POST['tokenid']) : '';

            // Building url
            $url = 'https://opensea.io/assets/ethereum/' . $address . '/' . $tokenid;

            // Scrap data from specific url
            $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
            $agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36';
            
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, $agent);
            curl_setopt($ch, CURLOPT_PROXY, '188.114.98.171:443');

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);

            curl_close ($ch);

            echo $server_output;
            break;
        default: 
            break;
    }

?>