<html>
<body>
<?php
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => "639177160433",
        "shortcode" => "292909913",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("Welcome to My Service!"),
        "client_id" => "387d6a5efc97f5ec5b8a5bf8b9f1cd6cf7dba154a2f1a48b52874b7631eac34b",
        "secret_key" => "643434c19f4348f2ca7086e91ec2e1e181ff95188784b62aa7daba50630e80b7"
    );

    $query_string = "";
    foreach($arr_post_body as $key => $frow)
    {
        $query_string .= '&'.$key.'='.$frow;
    }

    $URL = "https://post.chikka.com/smsapi/request";

    $curl_handler = curl_init();
    curl_setopt($curl_handler, CURLOPT_URL, $URL);
    curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
    curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
    curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handler);
    curl_close($curl_handler);
    
    exit(0);
?>
</body>
</html>