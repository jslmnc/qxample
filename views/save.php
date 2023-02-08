<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


//$_SESSION[''];
//if (!isset($_SESSION['email'])){
//	header('location:sign-in');
//}



$img = $_POST['imgBase64'];
$artist = $_POST['artist'];
$title = $_POST['title'];
$date = $_POST['date'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
$fileName = 'images/'.$artist.'_'.$title.'_'.$date.'.png';
file_put_contents($fileName, $fileData);




?>
