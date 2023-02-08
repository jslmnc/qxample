<?php 
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();

 $dt     = new DateTime('now', new DateTimezone('Asia/Manila'));
 $date   = $dt->format('F j, Y');
 $tm     = new DateTime('now', new DateTimezone('Asia/Manila'));
 $time   = $tm->format('g:i a');

 $msg      = str_replace("'", "", $_POST['message']);
 $receiver = $_POST['receive']; //incoming msg id
 $sender   = $_POST['send']; //outgoing msg id


 $sql="INSERT INTO chat(incomingid,outgoingid,message,currentdate,currenttime)VALUES(:incomingid,:outgoingid,:message,:currentdate,:currenttime)";
 $query=$dbh->prepare($sql);
 $query->bindParam(':incomingid',$sender,PDO::PARAM_STR);
	 $query->bindParam(':outgoingid',$receiver,PDO::PARAM_STR);
	 $query->bindParam(':message',$msg,PDO::PARAM_STR);
	 $query->bindParam(':currentdate',$date,PDO::PARAM_STR);
	 $query->bindParam(':currenttime',$time,PDO::PARAM_STR);

		 $query->execute();

 //echo "Message Sent!";
 
?>