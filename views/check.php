<?php 
// Establish database connection 
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();



// Check its existence (for example, execute a query from the database) ...
if(isset($_GET['rolename'])){

  $rolename=$_GET['rolename'];
$sql="SELECT * FROM roles WHERE rolename=:rolename ";
$query=$dbh->prepare($sql);
$query->bindParam(':rolename',$rolename,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
  $exist = false; 
  
}
else{
  $exist = true; 


}


echo json_encode(array(
  'valid' => $exist,
));

}



if(isset($_GET['username'])){

  $username=$_GET['username'];
$sql="SELECT * FROM user WHERE username=:username ";
$query=$dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
  $exist = false; 
  
}
else{
  $exist = true; 


}


echo json_encode(array(
  'valid' => $exist,
));

}



if(isset($_GET['email'])){

  $email=$_GET['email'];
$sql="SELECT * FROM user WHERE email=:email ";
$query=$dbh->prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
  $exist = false; 
  
}
else{
  $exist = true; 


}

echo json_encode(array(
  'valid' => $exist,
));

}


  


if(isset($_POST['all_delete'])){
  $all=$_POST['userids'];
  $extract_id=implode(',',$all);
  //echo $extract_id;
  $query="DELETE from user where id IN($extract_id)";
  $query1=$dbh->prepare($query);
  $query1->execute();

  if($query1){
   
    $_SESSION['status']='Data Deleted Successfully!';
    $_SESSION['status_code']='success';
    header("Location: users");

  }


}

if(isset($_POST['query'])){
  $useid=$_SESSION['id'];
  $sql="SELECT * FROM user  WHERE email LIKE '%".$_POST["query"]."%'";
  $query=$dbh->prepare($sql);
 // $query->bindParam(':email',$email,PDO::PARAM_STR);
  
  $query->execute();
  $cnt=1;
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
    

    foreach ($results as $result) 
    {
      '
      	<div id ="result" class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px">
													<!--begin::User-->
      <!--begin::Details-->
      <div class="d-flex align-items-center">
        <!--begin::Avatar-->
        <div class="symbol symbol-45px symbol-circle">
          <img alt="Pic" src="assets/media/avatars/300-5.jpg">
        </div>
        <!--end::Avatar-->
        <!--begin::Details-->
        <div class="ms-5">
          <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">'
        . ($result->fname)." ".($result->lname).'</a>
          <div class="fw-bold text-muted">'.($result->email).'</div>
        </div>
        <!--end::Details-->
      </div>
      <!--end::Details-->
      <!--begin::Lat seen-->
      <div class="d-flex flex-column align-items-end ms-2">
        <span class="text-muted fs-8 mb-1">2 weeks</span>
      </div>
      <!--end::Lat seen-->
    
    </div>
    <div class="separator separator-dashed d-none"></div>';

    }
    $cnt=$cnt+1; 

   
   
  
  }
  elseif($_POST["query"]==''||$_POST["query"]==null){
    echo 'fetch';


  }
  else{

     echo"No results";
  }

  

}



if(isset($_POST['txt'])){

  $txt=$_POST['txt'];
  $txt=htmlspecialchars($txt);
  $txt=rawurlencode($txt);
  $html=file_get_contents('https://translate.google.com/?hl=en&sl=auto&tl=en&text='.$txt.'&op=translate');
  $player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
  echo $player;
  }





if(!empty($_POST["username"])) {
  $username=($_POST["username"]);

$sql="SELECT * FROM user WHERE username=:username ";
$query=$dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{

  
  if($results['username']==($username)&&$results['username']!=(($_SESSION['username']))){
    echo '<div class="fv-plugins-message-container invalid-feedback">Username already taken</div>';


  }
  else{

    
  }

 


}

}

if(isset($_POST['0'])){
  
 
  $id=$_POST['id1'];
  $fname=$_POST['fname1'];
  $lname=$_POST['lname1'];
  $email=$_POST['email1'];
  $username=$_POST['username1'];
  $password=$_POST['password1'];
  $status=$_POST['status1'];
  $image=$_POST['avatar1'];
  $role=$_POST['role1'];
  

  $sql="UPDATE user set fname=:fname where id=:id";
  $query=$dbh->prepare($sql);
  $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->execute();
    
  
  }
  



if(!empty($_POST["registeruser"])) {
  $username=($_POST["registeruser"]);

$sql="SELECT * FROM user WHERE username=:username ";
$query=$dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{

  
 echo '<div class="fv-plugins-message-container invalid-feedback">Username already taken</div>';

//echo 1;
  
 


}
else{
 // echo 2;
}

}




  if(!empty($_POST["reset"])) {
    $email=($_POST["reset"]);
  
  $sql="SELECT * FROM user WHERE email=:email";
  $query=$dbh->prepare($sql);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {

   
  
  }
 
  else{

    if(!preg_match('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/',$email))
      {
        echo '<div class="fv-plugins-message-container invalid-feedback">Invalid email!</div>';
  
        //echo '<div class="fv-plugins-message-container invalid-feedback"></div>';
      }
  
      else{
  
        
      
  
        echo '<div class="fv-plugins-message-container invalid-feedback">Email not registered!</div>';

  }

  }
 //if(!preg_match('/^[a-zA-Z0-9_]{3,20}$/',$username)){
    

  if($email==""){
    echo '<div class="fv-plugins-message-container invalid-feedback">Email required!</div>';

  }
  }
 


  if(!empty($_POST["login"])) {
    $username=($_POST["login"]);

  $sql="SELECT * FROM user WHERE username=:username ";
  $query=$dbh->prepare($sql);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {


  }
  else{


    if(!preg_match('/^[a-zA-Z0-9_]{3,20}$/',$username))
      {
        echo '<div class="fv-plugins-message-container invalid-feedback">Invalid username!</div>';
  
        //echo '<div class="fv-plugins-message-container invalid-feedback"></div>';
      }
  
      else{
  
        
      
  
    echo '<div class="fv-plugins-message-container invalid-feedback">You are not registered!</div>';

  }

  }

}



  if(!empty($_POST["currentpassword"])) {
    $id=$_SESSION['id'];
    $currentpassword=($_POST["currentpassword"]);
   


  $sql="SELECT * FROM user WHERE id=:id AND password=:password";
  $query=$dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->bindParam(':password',$currentpassword,PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
   
    $_SESSION['icon']=true;


  }
  else{
    $_SESSION['icon']=false;

    echo '<div class="fv-plugins-message-container invalid-feedback">Password is incorrect!</div>';
  }

}




if(!empty($_POST["passe"])) {
  $id=$_SESSION['id'];
  $currentpassword=($_POST["passe"]);
 


$sql="SELECT * FROM user WHERE id=:id AND password=:password";
$query=$dbh->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->bindParam(':password',$currentpassword,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
 
  $_SESSION['passe']=true;


}
else{
  $_SESSION['passe']=false;

  echo '<div class="fv-plugins-message-container invalid-feedback">Password is incorrect!</div>';
}

}




if(!empty($_POST["updatee"])) {
  $id=$_SESSION['id'];
  $email=($_POST["updatee"]);
 


$sql="SELECT * FROM user WHERE email=:email ";
$query=$dbh->prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);

$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
 

  
  //$_SESSION['']=true;

  $sql="SELECT * FROM user WHERE email=:email AND id=:id";
$query=$dbh->prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':id',$_SESSION['id'],PDO::PARAM_STR);

$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{

  echo '<div class="fv-plugins-message-container invalid-feedback">Your current Email cant be your new Email!</div>';


}
else{
  echo '<div class="fv-plugins-message-container invalid-feedback">Email already taken!</div>';

}

}
else{
 // $_SESSION['icon']=false;

 
}

}

if(!empty($_POST["email"])) {
  $email=($_POST["email"]);

$sql="SELECT * FROM user WHERE email=:email ";
$query=$dbh->prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
  echo '<div class="fv-plugins-message-container invalid-feedback">Email already taken</div>';



  
}

}


if(isset($_POST["rpassword"])) {
  $password=($_POST["rpassword"]);

 
  if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/',$password)){

	//	$errors['password']='<div class="fv-plugins-message-container invalid-feedback">Use 8 or more characters with a mix of letters, numbers & symbols.
	//	</div>';

   echo '<div class="fv-plugins-message-container invalid-feedback">Use 8 or more characters with a mix of letters, numbers & symbols.</div>';



	  }
    


}


?>