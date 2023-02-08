<?php


include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();

//userlogincheck

//$id="";


$uploadDir = "../files/user/".$_SESSION['userid']."/user_files";

// Upload file
//$target_dir = "upload/";
//$uploadDir = 'uploads';
 
 
if (!empty($_FILES)) {
 $tmpFile = $_FILES['file']['tmp_name'];
 $filename = $uploadDir.'/'. $_FILES['file']['name'];
 move_uploaded_file($tmpFile,$filename);
}
?>