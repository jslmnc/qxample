<?php
$productID=$_GET['productID'];
$token=$_GET['access_token'];

$name="Platinum";
$description="Premium Plan";
$img="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png";
$url="localhost/Overflow/views/index";
$price=1000;
?>


<?php

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/billing/plans');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"name\": \"$name\",\n    \"description\": \"$description\",\n    \"product_id\": \"$productID\",\n    \"billing_cycles\": [\n        {\n            \"frequency\": {\n                \"interval_unit\": \"MONTH\",\n                \"interval_count\": 1\n            },\n            \"tenure_type\": \"REGULAR\",\n            \"sequence\": 1,\n            \"total_cycles\": 0,   \n            \"pricing_scheme\": {\n                \"fixed_price\": {\n                    \"value\": \"$price\",\n                    \"currency_code\": \"USD\"\n                }\n            }\n        }\n    ],\n    \"payment_preferences\": {\n        \"auto_bill_outstanding\": true,\n        \"payment_failure_threshold\": 1\n    }\n }");

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '.rawurldecode($token);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$err=curl_error($ch);
curl_close($ch);

if($err){

    echo ' error: '.$err;

}
else{

    $response=json_decode($result);
    $planID=$response->id;

    //var_dump($planID);
    if($planID){

        header('Location: pay.php?planID='.$planID.'&access_token='.$token);
    }
}




?>