<?php
	session_start();
	include('C:\xampp\htdocs\Overflow\includes\config.php');

	if (isset($_SESSION['id'])) {
		$userid=$_SESSION['id'];
		date_default_timezone_set('Asia/Manila');
		$timeout =  date("m/d/Y h:i:s a", time());  
		//FROM table ORDER by id DESC LIMIT 1;
	
		$sql="SELECT * FROM login_log WHERE userid=:userid order by id desc limit 1 ";
		$query=$dbh->prepare($sql);
		$query->bindParam(':userid',$userid,PDO::PARAM_STR);
		$query->execute();
    	$results=$query->fetch(PDO::FETCH_ASSOC);
		if($query->rowCount()>0)
		{
			$_SESSION['uid']=$results['id'];
			$uid=$_SESSION['uid'];

			$sql="UPDATE login_log set timeout=:timeout where userid=:userid and id=:id";
			$query=$dbh->prepare($sql);
			$query->bindParam(':timeout',$timeout,PDO::PARAM_STR);
			$query->bindParam(':userid',$userid,PDO::PARAM_STR);
			$query->bindParam(':id',$uid,PDO::PARAM_STR);
	
			$query->execute();


			$status='offline';
			$sql="UPDATE user set status=:status where id=:id";
			$query=$dbh->prepare($sql);
			$query->bindParam(':status',$status,PDO::PARAM_STR);
			$query->bindParam(':id',$userid,PDO::PARAM_STR);
			$query->execute();

			session_destroy();
			header('location: sign-in');
		}
		else{
			session_destroy();
			header('location: sign-in');
		}
		
		
		
	}
	else{
		
		session_destroy();
			header('location: sign-in');
	}
		

	
?>