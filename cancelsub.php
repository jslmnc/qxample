<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();
include('C:\xampp\htdocs\Overflow\views\UserInfo.php');

$id=1;

$token=$_GET['access_token'];

$ch = curl_init();

$subscriptionID="I-19JVT7BRNJMU";


curl_setopt($ch,CURLOPT_URL,'https://api-m.sandbox.paypal.com/v1/billing/subscriptions/'.rawurldecode($subscriptionID).'/cancel');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST,1);

$headers=array();
$headers[]='Content-Type: application/json';
$headers[]='Authorization: Bearer '.$token;
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

$result = curl_exec($ch);
$err=curl_error($ch);
curl_close($ch);

if($err){

    echo ' error: '.$err;

}
else{

   print_r($response=json_decode($result,true)) ;

}


?>