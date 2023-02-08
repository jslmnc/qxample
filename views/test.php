<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();
include('C:\xampp\htdocs\Overflow\views\UserInfo.php');
if (!isset($_SESSION['admin'])) {
//	header('location:logout');
	
}





echo 'User: '.$_SESSION['fname'].' ' .$_SESSION['lname'].'<br>';






$folder_name='../files/user/'.$_SESSION['username'].'';
//$count_size=0;
function folderSize($dir){
	$count_size = 0;
	$count = 0;
	$dir_array = scandir($dir);
	  foreach($dir_array as $key=>$filename){
		if($filename!=".." && $filename!="."){
		   if(is_dir($dir."/".$filename)){
			  $new_foldersize = foldersize($dir."/".$filename);
			  $count_size = $count_size+ $new_foldersize;
			}else if(is_file($dir."/".$filename)){
			  $count_size = $count_size + filesize($dir."/".$filename);
			  $_SESSION['diskused']=$count_size;
			  $count++;
			}
	   }
	 }
	return $count_size;
	}

	//echo folderSize($folder_name);


	function sizeFormat($bytes){ 
		$kb = 1024;
		$mb = $kb * 1024;
		$gb = $mb * 1024;
		$tb = $gb * 1024;
		
		if (($bytes >= 0) && ($bytes < $kb)) {
		return $bytes . ' B';
		
		} elseif (($bytes >= $kb) && ($bytes < $mb)) {
		return round($bytes / $kb,2) . ' KB';
		
		} elseif (($bytes >= $mb) && ($bytes < $gb)) {
		return round($bytes / $mb,2) . ' MB Plan';
		
		} elseif (($bytes >= $gb) && ($bytes < $tb)) {
		return round($bytes / $gb,2) . ' GB';
		
		} elseif ($bytes >= $tb) {
		return round($bytes / $tb,2) . ' TB';
		} else {
		return $bytes . ' B';
		}
		}
	






echo '<br><br> You are subscribed to: <br><br>';

	
$sql="SELECT * FROM subscription WHERE user_id=:user_id";
$query=$dbh->prepare($sql);
$query->bindParam(':user_id',$_SESSION['id'],PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0){

	$_SESSION['uplanid']=$results['plan_id'];
	echo '<br>subscription id: '.$results['id'].'<br>';

	echo '<br>plan_id: '.$results['plan_id'].'<br>';
	echo 'user_id: '.$results['user_id'].'<br>';
	echo 'start_date: '.$results['start_date'].'<br>';
	echo 'end_date: '.$results['end_date'].'<br>';
	echo 'status: '.$results['status'].'<br>';
	echo 'type: '.$results['type'].'<br>';
	echo 'balance: '.$results['balance'].'<br>';
	echo 'date: '.$results['date'].'<br>';


}
//echo $_SESSION['uplanid'].'<br>';

$sql="SELECT * FROM plans WHERE id=:id";
$query=$dbh->prepare($sql);
$query->bindParam(':id',$_SESSION['uplanid'],PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0){

//	$_SESSION['uplanid']=$results['plan_id'];
	echo '<br>plan id: '.$results['id'].'<br><br>';
	
	echo 'plan_name: '.$results['plan_name'].'<br>';
	echo 'plan_desc: '.$results['plan_desc'].'<br>';
	echo 'type: '.$results['type'].'<br>';
	echo 'tags_limit: '.$results['tags_limit'].'<br>';
	echo 'note_limit: '.$results['note_limit'].'<br>';
	echo 'space_limit: '.$results['space_limit'].'<br>';
	echo 'shareuser_limit: '.$results['shareuser_limit'].'<br>';
	echo 'price: '.$results['price'].'<br>';
	echo 'duration: '.$results['duration'].'<br>';
	echo 'date: '.$results['date'].'<br>';


$_SESSION['notelimit']=$results['note_limit'];
$_SESSION['spacelimit']=$results['space_limit'];
$_SESSION['shareuserlimit']=$results['shareuser_limit'];


}


echo('<br> Used space: ');

echo sizeFormat(folderSize($folder_name));

echo('<br> Limit: ');
//$limit = 524288000; //500 mb


$limit=$_SESSION['spacelimit']*1024*1024;
echo sizeFormat($limit);
//$diskused=$count_size-$limit;
$diskused=$limit-$_SESSION['diskused'];
$used=$_SESSION['diskused'];
echo('<br> Remaining space: ');

if($diskused<0){
	$diskused=0;
	echo sizeFormat($diskused);
}else{
	echo sizeFormat($diskused);

}


if($used>$limit){

	echo '<br> you used all your storage, please upgrade!';
}
else{
	echo '<br> not ';
}
echo'<br>		<a href="logout" class="menu-link px-5">Sign Out</a>'

//echo UserInfo::get_ip();

//echo UserInfo::get_device();
//echo UserInfo::get_os();
//echo UserInfo::get_browser();

?>