<?php
    //Chikka code: send message to users
    require_once("receive.php");
    $receiver = ExtractMobile();

    require_once("generate.php")
    $msg_id = gen_uuid();
   
    $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => $receiver;,//user(intended recipient)
        "shortcode" => "292902235",
        "message_id" => $msg_id;, //randomized
        "message" => urlencode("Abel's Phone!"),//result of processing
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