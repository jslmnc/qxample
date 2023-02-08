<?php 
// Establish database connection 
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


$date = date('Y-m-d'); //today date
$weekOfdays = array();
for($i =0; $i <= 7; $i++){
    $weekOfdays[] = date(' Y-m-d', strtotime("+$i day", strtotime($date)));
}
//print_r($weekOfdays);

echo $day =$weekOfdays[0];
  
echo date('l', strtotime($day));

?>