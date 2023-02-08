<?php 
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();

$receiver = $_GET['receive'];
$sender   = $_GET['send'];

													//$receiver = 'user_1awelpOiQUmfZ0F7MxPg';
//$sender   = 'user_QuGBXUgpsymjLP2IF9Ne';
//$sql = "SELECT *FROM chat where incomingid='$sender' AND outgoingid='$receiver'";

//$sql = "SELECT *FROM chat LEFT JOIN user ON user.uid = chat.incomingid 
//WHERE incomingid='$sender' AND outgoingid='$receiver' || outgoingid='$receiver' AND 
//incomingid='$receiver' ORDER BY chat.id ASC ";


$sql = "SELECT *FROM chat LEFT JOIN user ON user.uid = chat.incomingid 
WHERE incomingid='$sender' AND outgoingid='$receiver' || outgoingid='$sender' AND 
incomingid='$receiver' ORDER BY chat.id ASC";


 $query=$dbh->prepare($sql);
  
 $query->execute();
 $results=$query->fetchALL(PDO::FETCH_OBJ);

 $cnt=1;
 if ($query->rowCount()>0) {
   # code...
   foreach ($results as $result) 
   {
	 # code...
	 if($sender ==$result->uid){
?>
													<div class="d-flex justify-content-end mb-10">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column align-items-end">
															<!--begin::User-->
															<div class="d-flex align-items-center mb-2">
																<!--begin::Details-->
																<div class="me-3">
																	<span class="text-muted fs-7 mb-1"><?php echo htmlentities($result->currentdate.' '.$result->currenttime)?></span>
																	<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
																</div>
																<!--end::Details-->
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																<img src="<?php echo htmlentities("../files/user/".($result->uid)."/profile/".($result->image)."")?>
" alt="image" />																</div>
																<!--end::Avatar-->
															</div>
															<!--end::User-->
															<!--begin::Text-->
															<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"><?php echo htmlentities($result->message)?></div>
															<!--end::Text-->
														</div>
														<!--end::Wrapper-->
													</div>

<?php
	
}

else{

	?>


<div class="d-flex justify-content-start mb-10">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column align-items-start">
															<!--begin::User-->
															<div class="d-flex align-items-center mb-2">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle">
																<img src="<?php echo htmlentities("../files/user/".($result->uid)."/profile/".($result->image)."")?>
" alt="image" />																</div>
																<!--end::Avatar-->
																<!--begin::Details-->
																<div class="ms-3">
																	<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"><?php echo htmlentities(ucfirst($result->fname).' '.(ucfirst($result->lname)))?></a>
																	<span class="text-muted fs-7 mb-1"><?php echo htmlentities($result->currentdate.' '.$result->currenttime)?></span>
																</div>
																<!--end::Details-->
															</div>
															<!--end::User-->
															<!--begin::Text-->
															<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text"><?php echo htmlentities($result->message)?></div>
															<!--end::Text-->
														</div>
														<!--end::Wrapper-->
													</div>
	<!--end::Message(in)-->
													<!--begin::Message(out)-->
													
	<?php

}

?>
 






												
												
													<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
  else{
	?>


<div class="d-flex justify-content-start mb-10">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column align-items-start">
															<!--begin::User-->
															<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
															<!--end::User-->
															<!--begin::Text-->
															<!--end::Text-->
														</div>
														<!--end::Wrapper-->
													</div>
	<!--end::Message(in)-->
													<!--begin::Message(out)-->
													
	<?php


	
  }
?>
