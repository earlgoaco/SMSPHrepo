<?php
    
    require_once("receive.php");
    $client = ExtractMobile();
    $requestid = REQUESTID();

    require_once("generate.php")
    $msg_id = gen_uuid();
    //Chikka code: reply to users
    $arr_post_body = array(
        "message_type" => "REPLY",
        "mobile_number" => $client;,//(user)
        "shortcode" => "292902235",
        "request_id" => $requestid;,
        "message_id" => $msg_id;,//random
        "message" => urlencode("registered"),//magiging var
        "request_cost" => "FREE",
        "client_id" => "e0ffe3c9e810128ed67bfcfbc570ca48c2933540c279b0b0b17031fe64f94697",
        "secret_key" => "54b571944420cd7d3ab09ff622fa493296d25ab7bc05e1d212b6212f0346e7e6"
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