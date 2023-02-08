<?php

include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();
include('C:\xampp\htdocs\Overflow\views\UserInfo.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email="";
//$length = 32;    
//$reset_token=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
			
function encry($val){
	$p 	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // user define key
	$s 		= '459b9511a7f650ebd327889c45cc4e9b'; // user define secret key
	$encryptMethod      = "AES-256-CBC";
//	$val 		= 'Iloveyou'; // user define value
	
	$key = hash('sha256', $p);
	$ivalue = substr(hash('sha256', $s), 0, 16); // sha256 is hash_hmac_algo
	$result = openssl_encrypt($val, $encryptMethod, $key, 0, $ivalue);
	return $output = base64_encode($result);

}

function decry($val){

	$p 	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // user define key
	$s 		= '459b9511a7f650ebd327889c45cc4e9b'; // user define secret key
	$encryptMethod      = "AES-256-CBC";
	
	$key    = hash('sha256', $p);
	$ivalue = substr(hash('sha256', $s), 0, 16); // sha256 is hash_hmac_algo
	
	return $output = openssl_decrypt(base64_decode($val), $encryptMethod, $key, 0, $ivalue);
}


//sendpassresetemaillink
function send_password($dbh,$getname, $email, $reset_token,$os,$browser,$ip,$country,$teamloaction){

  $date =  date("m/d/Y h:i:s a", time());  


  $expire=date("m/d/Y h:i:s a", strtotime($date .' +1 hours'));

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	

  $sql="SELECT * FROM settings ";
  $query=$dbh->prepare($sql);
  
  $query->execute();
  $results=$query->fetchALL(PDO::FETCH_OBJ);

  $cnt=1;
  if ($query->rowCount()>0) {
    # code...
    foreach ($results as $result) 
    {
      # code...

  



	 
		//Server settings
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = (($result->host));                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = (($result->smtpemailaddress));                     //SMTP username
	//	$mail->Password   = 'OverflowgroupQ!1';                               //SMTP password
		$mail->Password   = (($result->password));                                                      //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = $result->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom((($result->smtpemailaddress)), (($result->emailname)));
		$mail->addAddress($email,$getname);     //Add a recipient
	 
	
		//Attachments
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    }}
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Your Password Reset Link';
	   // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$email_template='<style>html,body { padding: 0; margin:0; }</style>
	<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
			<tbody>
				<tr>
					<td align="center" valign="center" style="text-align:center; padding: 40px">
							<img  src="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png" />
						</a>
					</td>
				</tr>
				<tr>
					<td align="left" valign="center">
						<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
							<!--begin:Email content-->
							<div style="padding-bottom: 30px; font-size: 17px;">
								<strong>Hello, '.$getname.'!</strong>
							</div>
							<div style="padding-bottom: 30px">You are receiving this email because we received a password reset request for your account. To proceed with the password reset please click on the button below:</div>
							<div style="padding-bottom: 40px; text-align:center;">
								<a href="localhost/Overflow/views/new-password?token='.$reset_token.'&uid='.encry($email).'" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Reset Password</a>
							</div>
							<div style="padding-bottom: 30px">This password reset link will expire in <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">60 minutes - '.$expire.'</a></div>
							<div style="padding-bottom: 1px">For security, this request was received from a <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$os.'</a> device using <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$browser.'</a> with IP: <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$ip.' </a> from the <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold"> '.$country .' '.$date.'</a>.</div>
							<div style="padding-bottom: 1px">If you did not request a password reset, no further action is required and please contact our
							<a href="http://localhost/Overflow/views/contactus" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">support team</a>. Your security is very important to us!</div>
							<div style="border-bottom: 1px solid #eeeeee; margin: 15px 0">
							</div>
							<div style="padding-bottom: 50px; word-wrap: break-all;">
								<p style="margin-bottom: 10px;">Button not working? Try pasting this URL into your browser:</p>
								<a href="localhost/Overflow/views/new-password?token='.$reset_token.'&uid='.encry($email).'" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7">localhost/Overflow/views/new-password?token='.$reset_token.'&uid='.encry($email).'</a>
							</div>
						
							<!--end:Email content-->
							<!--end:Email content-->
							<div style="padding-bottom: 10px">Kind regards,
							<br>The Overflow Team.
							<tr>
								<td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
								<p>'.$teamloaction.'</p>
                      <p>2022 Copyright ©
                        <a href="http://localhost/Overflow/views/index" rel="noopener" target="_blank">Overflow</a>.</p>
                      </td>
                      </tr></br></div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>';
	
	
		$mail->Body=$email_template;
		$mail->send();
	//	echo 'Message has been sent';
	
	//unset($_SESSION['email']);




	
	
	}


  if(isset($_POST['action'])){

    if($_POST['action']=="deletefile"){

      $path="../files/user/".$_SESSION['userid']."/user_files/".$_POST['fileName'];

      //$dir ="../files/user/".$result->uid."/profile";

      unlink($path);
      echo 1;
     

    }
  }



  if(isset($_POST['action'])){

    if($_POST['action']=="renamefile"){
      $newfile=$_POST['newValue'];
      $oldfile=$_POST['nameValue'];


      rename("../files/user/".$_SESSION['userid']."/user_files/".$oldfile, "../files/user/".$_SESSION['userid']."/user_files/".$newfile);

     // $path="../files/user/".$_SESSION['userid']."/user_files/".$_POST['fileName'];

      //$dir ="../files/user/".$result->uid."/profile";

     // unlink($path);
      echo 1;
     

    }
  }





  if(isset($_POST['title'])){
    if($_POST['action']=='login'){



    }
    
  }

//send email password changed
  function send_emailchangepass($dbh,$getname, $email, $browser, $os, $country, $address, $ip){

    $date =  date("m/d/Y h:i:s a", time());  


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    $sql="SELECT * FROM settings ";
    $query=$dbh->prepare($sql);
    
    $query->execute();
    $results=$query->fetchALL(PDO::FETCH_OBJ);
  
    $cnt=1;
    if ($query->rowCount()>0) {
      # code...
      foreach ($results as $result) 
      {
        # code...
  
    
  
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = (($result->host));                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = (($result->smtpemailaddress));                     //SMTP username
    //	$mail->Password   = 'OverflowgroupQ!1';                               //SMTP password
      $mail->Password   = (($result->password));                                       //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = $result->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
      //Recipients
      $mail->setFrom((($result->smtpemailaddress)), (($result->emailname)));
      $mail->addAddress($email, $getname);     //Add a recipient
      }
    }
    
      //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Overflow Password Changed';
       // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
       // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $email_template='<style>html,body { padding: 0; margin:0; }</style>
    <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
          <tr>
            <td align="center" valign="center" style="text-align:center; padding: 40px">
            
                <img  src="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png />
              </a>
            </td>
          </tr>
          <tr>
            <td align="left" valign="center">
              <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                <!--begin:Email content-->
                <div style="padding-bottom: 30px; font-size: 17px;">
                  <strong>Hello, '.$getname.'!</strong>
                </div>
                <div style="padding-bottom: 20px">Your Overflow password was just changed.</div>
                <div style="padding-bottom: 25px">If you did not change your password, please contact our
                <a href="http://localhost/Overflow/views/contactus" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">support team</a>. Your security is very important to us!</div>
                <div style="padding-bottom: 1px">For security, your password was changed from a <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$os.'</a> device using <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$browser.'</a> with IP: <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$ip.' </a> from the <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold"> '.$country .' - '.$date.'</a>.</div>
                <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0">
                </div>
                <!--end:Email content-->
                <div style="padding-bottom: 10px">Kind regards,
                <br>The Overflow Team.
                <tr>
                  <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                  <p>'.$address.'</p>
                  <p>2022 Copyright ©
                    <a href="http://localhost/Overflow/views/index" rel="noopener" target="_blank">Overflow</a>.</p>
                  </td>
                  </tr></br></div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>';
    
    
      $mail->Body=$email_template;
      $mail->send();
    //	echo 'Message has been sent';
    
    
    
    }



    function send_verificationcode($dbh,$getname, $email, $code,$address,$os,$browser,$ip,$country){
      $date =  date("m/d/Y h:i:s a", time());  


      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
      
      $sql="SELECT * FROM settings ";
      $query=$dbh->prepare($sql);
      
      $query->execute();
      $results=$query->fetchALL(PDO::FETCH_OBJ);
    
      $cnt=1;
      if ($query->rowCount()>0) {
        # code...
        foreach ($results as $result) 
        {
          # code...
    
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = (($result->host));                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = (($result->smtpemailaddress));                     //SMTP username
      //	$mail->Password   = 'OverflowgroupQ!1';                               //SMTP password
        $mail->Password   = (($result->password));   
        // /oqagibwrqdarihpp
    
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = $result->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
        //Recipients
        $mail->setFrom((($result->smtpemailaddress)), (($result->emailname)));
        $mail->addAddress($email,$getname);     //Add a recipient
       
        }}
        //Attachments
         // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
      
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $code.' '.'is your Email Verification Code';
         // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
         // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
      $email_template='<style>html,body { padding: 0; margin:0; }</style>
      <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
          <tbody>
            <tr>
              <td align="center" valign="center" style="text-align:center; padding: 40px">
                  <img  src="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png" />
                </a>
              </td>
            </tr>
            <tr>
              <td align="left" valign="center">
                <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                  <!--begin:Email content-->
                  <div style="padding-bottom: 30px; font-size: 17px;">
                    <strong>Hello, '.$getname.'!</strong>
                  </div>
                  <div style="padding-bottom: 30px">Someone tried to signup for an Overflow account with '.$email.'.</div>
                  <div style="padding-bottom: 30px">If this was you, enter the confirmation code below:</div>
    
                  <div style="padding-bottom: 40px; text-align:center;">
                  <div style="padding-bottom: 30px; font-size: 40px;">
                  <a  style="text-decoration:none;color:#009ef7;font-weight:bold">'.$code.'</a>							</div></div>
                  <div style="padding-bottom: 25px">If you did not create an account using your this email, please contact our
                  <a href="http://localhost/Overflow/views/contactus" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">support team</a>. Your security is very important to us!</div>
                  <div style="padding-bottom: 1px">For security, someone created an account using this email using <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$os.'</a> device using <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$browser.'</a> with IP: <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$ip.' </a> from the <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold"> '.$country .' - '.$date.'</a>.</div>
                  <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                  <!--end:Email content-->
                  <div style="padding-bottom: 10px">Kind regards,
                  <br>The Overflow Team.
                  <tr>
                  <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                  <p>'.$address.'</p>
                  <p>2022 Copyright ©
                    <a href="http://localhost/Overflow/views/index" rel="noopener" target="_blank">Overflow</a>.</p>
                  </td>
                  </tr></br></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>';
      
      
        $mail->Body=$email_template;
        $mail->send();
      //	echo 'Message has been sent';
      
      //unset($_SESSION['email']);
    
      
      }



      function send_email($dbh,$name, $email, $subject,$message, $address){

        $date =  date("m/d/Y h:i:s a", time());  


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        $sql="SELECT * FROM settings ";
        $query=$dbh->prepare($sql);
        
        $query->execute();
        $results=$query->fetchALL(PDO::FETCH_OBJ);
      
        $cnt=1;
        if ($query->rowCount()>0) {
          # code...
          foreach ($results as $result) 
          {
          //Server settings
        //	$mail->SMTPDebug = //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = (($result->host));                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = (($result->smtpemailaddress));                     //SMTP username
        //	$mail->Password   = 'OverflowgroupQ!1';                               //SMTP password
          $mail->Password   = (($result->password));                               //SMTP password
        
      
          // /oqagibwrqdarihpp
      
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = $result->port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
          //Recipients
          $mail->setFrom((($result->smtpemailaddress)), (($result->emailname)));
          $mail->addAddress($email,$name);     //Add a recipient
          }
        }
        
          //Attachments
           // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
           // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Hi, We received your message: '.$subject;
           // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
           // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $email_template='<style>html,body { padding: 0; margin:0; }</style>
        <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
          <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
            <tbody>
              <tr>
                <td align="center" valign="center" style="text-align:center; padding: 40px">
                    <img  src="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png" />
                  </a>
                </td>
              </tr>
              <tr>
                <td align="left" valign="center">
                  <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                    <!--begin:Email content-->
                    <div style="padding-bottom: 30px; font-size: 17px;">
                      <strong>Hello, '.$name.'!</strong>
                    </div>
                    <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                    <div style="padding-bottom: 1px">We received your message: </div>
                    <div style="padding-bottom: 20px"> <a href="" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$message.'.</a></div>
                    <div style="padding-bottom: 1px">Subject: </div>
                    <div style="padding-bottom: 20px"> <a href="" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$subject.'</a></div>
                    <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                    <div style="padding-bottom: 1px">Thank you for contacting us!</div>
                    <div style="padding-bottom: 20px">Our team will reach you out in a bit.</div>
                    <div style="padding-bottom: 0px">'.$date.'</div>
                    <!--end:Email content-->
                    <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                    <div style="padding-bottom: 10px">Kind regards,
                    <br>The Overflow Team.
                    <tr>
                      <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                      <p>'.$address.'</p>
                      <p>2022 Copyright ©
                        <a href="http://localhost/Overflow/views/index" rel="noopener" target="_blank">Overflow</a>.</p>
                      </td>
                      </tr></br></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>';
        
        
          $mail->Body=$email_template;
          $mail->send();
        //	echo 'Message has been sent';
        
        //unset($_SESSION['email']);
      
        
        }




        function emailchange($dbh,$getname, $email, $newemail, $ui, $browser, $os, $country,$encryptedemail, $address, $ip){

          $date =  date("m/d/Y h:i:s a", time());  

          //Create an instance; passing `true` enables exceptions
          $mail = new PHPMailer(true);
          
          $sql="SELECT * FROM settings ";
          $query=$dbh->prepare($sql);
          
          $query->execute();
          $results=$query->fetchALL(PDO::FETCH_OBJ);
        
          $cnt=1;
          if ($query->rowCount()>0) {
            # code...
            foreach ($results as $result) 
            {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = (($result->host));                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = (($result->smtpemailaddress));                     //SMTP username
          //	$mail->Password   = 'OverflowgroupQ!1';                               //SMTP password
            $mail->Password   = (($result->password));                                       //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = $result->port;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
          
            //Recipients
            $mail->setFrom((($result->smtpemailaddress)), (($result->emailname)));
            $mail->addAddress($newemail, $getname);     //Add a recipient
            }
          }
          
            //Attachments
             // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
             // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
          
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'You changed your email, please confirm to change';
             // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
             // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          
             $email_template='<style>html,body { padding: 0; margin:0; }</style>
             <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
               <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
                 <tbody>
                   <tr>
                     <td align="center" valign="center" style="text-align:center; padding: 40px">
                         <img  src="https://i.ibb.co/Qc0b1Jt/cscsd-removebg-preview.png" />
                       </a>
                     </td>
                   </tr>
                   <tr>
                     <td align="left" valign="center">
                       <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                         <!--begin:Email content-->
                         <div style="padding-bottom: 30px; font-size: 17px;">
                           <strong>Hello, '.$getname.'!</strong>
                         </div>
                         <div style="padding-bottom: 30px">You are receiving this email because you changed your email from <a href="" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$email.'</a> to a new one <a href="" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$newemail.'</a>. To confirm the email click the button below:</div>
                         <div style="padding-bottom: 40px; text-align:center;">
                           <a href="localhost/Overflow/views/confirmed-email?ref='.$encryptedemail.'&ui='.$ui.'&o='.encry($email).'" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Accept</a>
                         </div>
                         <div style="padding-bottom: 1px">For security, you changed your email from a <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$os.'</a> device using <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$browser.'</a> with IP: <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">'.$ip.' </a> from the <a href="#" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold"> '.$country .' '.$date.'</a>.</div>
                         <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0">
                         </div>
                         <div style="padding-bottom: 50px; word-wrap: break-all;">
                           <p style="margin-bottom: 10px;">Button not working? Try pasting this URL into your browser:</p>
                           <a href="localhost/Overflow/views/confirmed-email?ref='.$encryptedemail.'&ui='.$ui.'&o='.encry($email).'" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7">localhost/Overflow/views/confirmed-email?ref='.$encryptedemail.'&ui='.$ui.'&o='.encry($email).'</a>
                         </div>
                       
                         <!--end:Email content-->
                         <!--end:Email content-->
                         <div style="padding-bottom: 10px">Kind regards,
                         <br>The Overflow Team.
                         <tr>
                           <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                           <p>'.$address.'</p>
                                 <p>2022 Copyright ©
                                   <a href="http://localhost/Overflow/views/index" rel="noopener" target="_blank">Overflow</a>.</p>
                                 </td>
                                 </tr></br></div>
                       </div>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>';
             
          
          
            $mail->Body=$email_template;
            $mail->send();
          //	echo 'Message has been sent';
          
          
          
          }
      
      


function getCountry($iip)
{
  $json = "http://www.geoplugin.net/json.gp?ip=".$iip."";


  $ch = curl_init($json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:59.0) Gecko/20100101 Firefox/59.0");
  $jsonfile = curl_exec($ch);
  curl_close($ch);


  $RG_array = json_decode($jsonfile,true);


  return $RG_array['geoplugin_countryName'];
  // $RG_array['address']['city'];
  // $RG_array['address']['country'];
}

function getteamlocation($dbh)
{
	$sql="SELECT * FROM settings";
	$query=$dbh->prepare($sql);
	
	$query->execute();
	$results=$query->fetchALL(PDO::FETCH_OBJ);
  
	$cnt=1;
	if ($query->rowCount()>0) {
	  foreach ($results as $result) 
	  {

		$address=$result->address;
	
$cnt=$cnt+1; 
}

return $address;
}

}



  //editemail
  if(isset($_POST['action'])){

    if($_POST['action']=="editpassword"){

     $password=$_POST['newpassword'];
     $id=$_SESSION['id'];


     // echo $id;
    


  $sql="SELECT * FROM user WHERE id=:id";
  $query=$dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
    //echo 1;
   // echo $email;
   //echo 1;
  //echo $password;
  $idd=$results['id'];
   $email=$results['email'];
   $getname=$results['fname'].' '.$results['lname'].'';
   $getusername=$results['username'];
//echo $id;

   $sql="UPDATE user set password=:password where id=:id";
   $query=$dbh->prepare($sql);
   $query->bindParam(':password',$password,PDO::PARAM_STR);
   $query->bindParam(':id',$idd,PDO::PARAM_STR);
   $query->execute();


   setcookie('username',$getusername,time()+(10*365*24*60*60));
   setcookie('password',$password,time()+(10*365*24*60*60));

  // echo trim($ui, 'user_');
  $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
  $os=UserInfo::get_os();
  $ip = file_get_contents('https://api.my-ip.io/ip');
  $country=getCountry($ip);
  $address=getteamlocation($dbh);

  

  //echo $decrypt =decrypt('fYc/XsaIaVQIvtvIUcu51Pg2LaQnN3NHBnherOWsFJQkDqoDw1jJu8/fEmjUut4K6fY8omd1nUP+5Xpf8qjiF09tnJ3w6MBXG/B10OQFEZw');
  send_emailchangepass($dbh,$getname, $email, $browser, $os, $country, $address, $ip);
echo 1;
 
//echo 1;





  // echo 1;
   
//echo 1;


  }
  else{
   
   
  }









     
    }

  }




  //editemail
  if(isset($_POST['action'])){

    if($_POST['action']=="editemail"){

      $email=$_POST['email'];
      $password=$_POST['ecpassword'];
      $id=$_SESSION['id'];


     // echo $id;
    


  $sql="SELECT * FROM user WHERE password=:password AND id=:id";
  $query=$dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);

  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
   // echo $email;

  $newemail=$_POST['email'];
   $currentemail=$results['email'];
   $uid=$results['uid'];
   $f=$results['fname'];
   $l=$results['lname'];
   $getname=$f.' '.$l;

  // echo trim($ui, 'user_');
  $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
  $os=UserInfo::get_os();
  $ip = file_get_contents('https://api.my-ip.io/ip');
  $country=getCountry($ip);
  $address=getteamlocation($dbh);

  $encryptedemail=encry($newemail);


  $id=encry($uid);


  //echo $decrypt =decrypt('fYc/XsaIaVQIvtvIUcu51Pg2LaQnN3NHBnherOWsFJQkDqoDw1jJu8/fEmjUut4K6fY8omd1nUP+5Xpf8qjiF09tnJ3w6MBXG/B10OQFEZw');

  emailchange($dbh,$getname, $currentemail, $newemail, $id, $browser, $os, $country, $encryptedemail, $address, $ip);
 
echo 1;



  // echo 1;
   
//echo 1;


  }
  else{
   
  }









     
    }

  }


if(isset($_GET['action'])){
if($_GET['action']=='checkloginpass'){

    $password=$_GET['password'];
   $username=$_GET['username'];
  $sql="SELECT * FROM user WHERE password=:password AND username=:username";
  $query=$dbh->prepare($sql);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);

  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
    $exist = true; 
    
  }
  else{
    $exist = false; 
  
  
  }
  
  
  echo json_encode(array(
    'valid' => $exist,
  ));
  
  }
}



if(isset($_GET['action'])){
  if($_GET['action']=='loginpasssession'){
    $id=$_SESSION['id'];
      $password=$_GET['ecpassword'];
    $sql="SELECT * FROM user WHERE password=:password AND id=:id";
    $query=$dbh->prepare($sql);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
  
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
      $exist = true; 
      
    }
    else{
      $exist = false; 
    
    
    }
    
    
    echo json_encode(array(
      'valid' => $exist,
    ));
    
    }
  }


  if(isset($_GET['action'])){
    if($_GET['action']=='changepasscheck'){
      $id=$_SESSION['id'];
        $password=$_GET['currentpassword'];
      $sql="SELECT * FROM user WHERE password=:password AND id=:id";
      $query=$dbh->prepare($sql);
      $query->bindParam(':password',$password,PDO::PARAM_STR);
      $query->bindParam(':id',$id,PDO::PARAM_STR);
    
      $query->execute();
      $results=$query->fetch(PDO::FETCH_ASSOC);
      if($query->rowCount()>0)
      {
        $exist = true; 
        
      }
      else{
        $exist = false; 
      
      
      }
      
      
      echo json_encode(array(
        'valid' => $exist,
      ));
      
      }
    }


//login
if(isset($_POST['action'])){
  if($_POST['action']=='login'){
  
      $password=$_POST['password'];
     $username=$_POST['username'];
    $cookie=$_POST['remember'];



//----------------ADMIN
     $sql="SELECT * FROM user WHERE username=:username AND password=:password AND role='admin'";
     $query=$dbh->prepare($sql);
     $query->bindParam(':username',$username,PDO::PARAM_STR);
     $query->bindParam(':password',$password,PDO::PARAM_STR);
     $query->execute();
     $results=$query->fetch(PDO::FETCH_ASSOC);
     if($query->rowCount()>0)
     {

     
 
    
          session_regenerate_id();
         $_SESSION['id']=$results['id'];
        $_SESSION['fname']=$results['fname'];
       $_SESSION['lname']=$results['lname'];
       $_SESSION['role']=$results['role'];
       $_SESSION['username']=$results['username'];
       $_SESSION['email']=$results['email'];
        $_SESSION['image']=$results['image'];
         $_SESSION['userid']=$results['uid'];


         		
		if(isset($cookie)){
		//	$rememberme=$_POST['remember'];
		//	$pass=($_POST['password']);
	
			setcookie('username',$username,time()+(10*365*24*60*60));
			setcookie('password',$password,time()+(10*365*24*60*60));
	
	
		}
		else{
			
			if(isset($_COOKIE["username"])){
	
	
				setcookie("username","");
	
			}
			if(isset($_COOKIE["password"])){
	
	
				setcookie("password","");
	
			}
		//	setcookie('username',$username,time()+30);
			//setcookie('password',$password,time()+30);
		//	setcookie('userLogin',$rememberme,time()+30);
	
	
		}

      //  $_SESSION['email']=$results['email'];
       // echo "<script type='text/javascript'>document.location='userdashboard.php';</script>";

    date_default_timezone_set('Asia/Manila');
    $timein =  date("m/d/Y h:i:s a", time());  
    $timeout = "";  
    //	$latest_insert_id=0; 
    //$userid=$_SESSION['id'];


    //user ip
    $ip = file_get_contents('https://api.my-ip.io/ip');
    $location=getCountry($ip);

    $device=UserInfo::get_browser()." - ".UserInfo::get_device()." - ".UserInfo::get_os();
      
    $sql="INSERT INTO login_log(userid,ip,location,device,timein,timeout)VALUES(:userid,:ip,:location,:device,:timein,:timeout)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':userid',$_SESSION['id'],PDO::PARAM_STR);
    $query->bindParam(':ip',$ip,PDO::PARAM_STR);
    $query->bindParam(':location',$location,PDO::PARAM_STR);
    $query->bindParam(':device',$device,PDO::PARAM_STR);
    $query->bindParam(':timein',$timein,PDO::PARAM_STR);
    $query->bindParam(':timeout',$timeout,PDO::PARAM_STR);

      $query->execute();

      $status='online';
      $sql="UPDATE user set status=:status where username=:username";
      $query=$dbh->prepare($sql);
      $query->bindParam(':status',$status,PDO::PARAM_STR);
      $query->bindParam(':username',$username,PDO::PARAM_STR);
      $query->execute();

      $_SESSION['admin']='admin';
      echo 1;

 
 
     }  
     else{


      
//----------------- USER
      $sql="SELECT * FROM user WHERE username=:username AND password=:password AND role='user'";
      $query=$dbh->prepare($sql);
      $query->bindParam(':username',$username,PDO::PARAM_STR);
      $query->bindParam(':password',$password,PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetch(PDO::FETCH_ASSOC);
      if($query->rowCount()>0)
      {
  
      
     
           session_regenerate_id();
          $_SESSION['id']=$results['id'];
         $_SESSION['fname']=$results['fname'];
        $_SESSION['lname']=$results['lname'];
        $_SESSION['role']=$results['role'];
        $_SESSION['username']=$results['username'];
        $_SESSION['email']=$results['email'];
         $_SESSION['image']=$results['image'];
          $_SESSION['userid']=$results['uid'];
 
 
              
   if(isset($cookie)){
     //	$rememberme=$_POST['remember'];
    // 	$pass=($_POST['password']);
   
       setcookie('username',$username,time()+(10*365*24*60*60));
       setcookie('password',$password,time()+(10*365*24*60*60));
   
   
     }
     else{
      if(empty($cookie))
       
       if(isset($_COOKIE["username"])){
   
   
         setcookie("username","");
   
       }
       if(isset($_COOKIE["password"])){
   
   
         setcookie("password","");
   
       }
     //	setcookie('username',$username,time()+30);
       //setcookie('password',$password,time()+30);
     //	setcookie('userLogin',$rememberme,time()+30);
   
   
   
   
     }
 
       //  $_SESSION['email']=$results['email'];
        // echo "<script type='text/javascript'>document.location='userdashboard.php';</script>";
 
     date_default_timezone_set('Asia/Manila');
     $timein =  date("m/d/Y h:i:s a", time());  
     $timeout = "";  
     //	$latest_insert_id=0; 
     //$userid=$_SESSION['id'];
 
 
     //$ip = UserInfo::get_ip();
     $ip = file_get_contents('https://api.my-ip.io/ip');
     $location=getCountry($ip);
 
     $device=UserInfo::get_browser()." - ".UserInfo::get_device()." - ".UserInfo::get_os();
       
     $sql="INSERT INTO login_log(userid,ip,location,device,timein,timeout)VALUES(:userid,:ip,:location,:device,:timein,:timeout)";
     $query=$dbh->prepare($sql);
     $query->bindParam(':userid',$_SESSION['id'],PDO::PARAM_STR);
     $query->bindParam(':ip',$ip,PDO::PARAM_STR);
     $query->bindParam(':location',$location,PDO::PARAM_STR);
     $query->bindParam(':device',$device,PDO::PARAM_STR);
     $query->bindParam(':timein',$timein,PDO::PARAM_STR);
     $query->bindParam(':timeout',$timeout,PDO::PARAM_STR);
 
       $query->execute();
 
       $status='online';
       $sql="UPDATE user set status=:status where username=:username";
       $query=$dbh->prepare($sql);
       $query->bindParam(':status',$status,PDO::PARAM_STR);
       $query->bindParam(':username',$username,PDO::PARAM_STR);
       $query->execute();
 
       $_SESSION['user']='user';
       echo 2;
 
 
      // header('location:dashboard');
 
 
    //   login( $_SESSION['role']);
       //header('location: index' );
 
       //header("location: admin");
   //    login($_SESSION['role']);
  
      }   
     


     } 


    
    
    }
  }
  





  //resetpass
if(isset($_POST['action'])){
  if($_POST['action']=='resetpass'){


    $email=strtolower($_POST['email']);
    
    $date =  date("m/d/Y h:i:s a", time());  
  
  
      $sql="SELECT * FROM user WHERE email=:email ";
      $query=$dbh->prepare($sql);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetch(PDO::FETCH_ASSOC);
      if($query->rowCount()>0)
      {
      $_SESSION['email']=$email;
      $fname=$results['fname'];
      $lname=$results['lname'];
      $getname= $fname .' '. $lname;
      
      $length = 32;    
      $reset_token=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
  
  
    $sql="SELECT * FROM passreset WHERE email=:email ";
      $query=$dbh->prepare($sql);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->execute();
      $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
  
      if($results['reset_token']==$reset_token)
      {
        //$reset_token=md5(rand());
        
        $length = 32;    
        $reset_token=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
  
      
    //	$reset_token=;
  
      $sql="UPDATE passreset set reset_token=:reset_token,date=:date where email=:email";
      $query=$dbh->prepare($sql);
      $query->bindParam(':reset_token',$reset_token,PDO::PARAM_STR);
      $query->bindParam(':date',$date,PDO::PARAM_STR);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
  
      $query->execute();
  
      $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
      $os=UserInfo::get_os();
      $ip = file_get_contents('https://api.my-ip.io/ip');
      $country=getCountry($ip);
  
      $address=getteamlocation($dbh);
   //   echo $country;
      send_password($dbh,$getname, $email, $reset_token,$os,$browser,$ip,$country,$address);
      echo 1;
  
      }else{
        $sql="UPDATE passreset set reset_token=:reset_token,date=:date where email=:email";
        $query=$dbh->prepare($sql);
        $query->bindParam(':reset_token',$reset_token,PDO::PARAM_STR);
        $query->bindParam(':date',$date,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
    
        $query->execute();
    
        $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
        $os=UserInfo::get_os();
        $ip = file_get_contents('https://api.my-ip.io/ip');
        $country=getCountry($ip);
    
        $address=getteamlocation($dbh);
     //   echo $country;
        send_password($dbh,$getname, $email, $reset_token,$os,$browser,$ip,$country,$address);
        
        echo 1;
      }
  
    }
    else{
  
  
  
    $sql="INSERT INTO passreset(email,reset_token,date)VALUES(:email,:reset_token,:date)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':reset_token',$reset_token,PDO::PARAM_STR);
    $query->bindParam(':date',$date,PDO::PARAM_STR);
    
        
      $query->execute();
  
      $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
      $os=UserInfo::get_os();
      $ip = file_get_contents('https://api.my-ip.io/ip');
      $country=getCountry($ip);
      $address=getteamlocation($dbh);
    
      send_password($dbh,$getname, $email, $reset_token,$os,$browser,$ip,$country,$address);
      echo 1;
  
      }
  
      
  
    //  header('location:verify-email');
  
  
    }
  
  
  




   // echo 1;
  }}




  
//new-password.php
if(isset($_POST['action'])){
  if($_POST['action']=='newpass'){
  $email=$_POST['email'];
  $reset_token=$_POST['token'];
  $password=$_POST['password'];




$sql="SELECT * FROM passreset WHERE reset_token=:reset_token";
$query=$dbh->prepare($sql);
$query->bindParam(':reset_token',$reset_token,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{

  $date =  date("m/d/Y h:i:s a", time());  

  $e=$results['email'];
  $r=$results['reset_token'];


 $length = 32;    
 $reset_token1=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
 
 //echo $password;
 $sql="SELECT * FROM user WHERE email=:email";
 $query=$dbh->prepare($sql);
 $query->bindParam(':email',$e,PDO::PARAM_STR);
 $query->execute();
 $results=$query->fetch(PDO::FETCH_ASSOC);
 if($query->rowCount()>0)
 {

  $fname=$results['fname'];
  $lname=$results['lname'];
  $getname= $fname .' '. $lname;



 $sql="UPDATE passreset set reset_token=:reset_token,date=:date where email=:email";
 $query=$dbh->prepare($sql);
 $query->bindParam(':reset_token',$reset_token1,PDO::PARAM_STR);
 $query->bindParam(':date',$date,PDO::PARAM_STR);
 $query->bindParam(':email',$e,PDO::PARAM_STR);
 $query->execute();
   
 $sql="UPDATE user set password=:password where email=:email";
 $query=$dbh->prepare($sql);
 $query->bindParam(':password',$password,PDO::PARAM_STR);
 $query->bindParam(':email',$e,PDO::PARAM_STR);
 $query->execute();
     //	}
       

 $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
 $os=UserInfo::get_os();
 $ip = file_get_contents('https://api.my-ip.io/ip');
 $country=getCountry($ip);
 $address=getteamlocation($dbh);


 send_emailchangepass($dbh,$getname, $email, $browser, $os, $country, $address, $ip);

echo 1;


 }

}


  }}




  //register
if(isset($_POST['action'])){
  if($_POST['action']=='register'){

    $date =  date("m/d/Y h:i:s a", time());  
    $code= mt_rand(100000,999999); 
  
    $fname=ucfirst($_POST['fname']);
    $lname=ucfirst($_POST['lname']);
    $username=($_POST['username']);
    $password=($_POST['password']);
    $role=($_POST['role']);
    $email=($_POST['email']);
    $image=($_POST['image']);
  
     $_SESSION['email']=$email;
     $_SESSION['ufname']=$fname;
     $_SESSION['ulname']=$lname;
     $_SESSION['uusername']=$username;
     $_SESSION['upassword']=$password;
     $_SESSION['urole']=$role;
     $_SESSION['uemail']=$email;
     $_SESSION['uimage']=$image;

     $getname=$fname. ' '. $lname;
    
  
    $code= mt_rand(100000,999999); 
    $sql="SELECT * FROM emailconfirmation WHERE email=:email ";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
      $date =  date("m/d/Y h:i:s a", time());  
    
  
      if($results['code']==$code ){
  
        $code= mt_rand(100000,999999); 
      }
    
            
        $sql="UPDATE emailconfirmation set code=:code,date=:date where email=:email";
        $query=$dbh->prepare($sql);
        $query->bindParam(':code',$code,PDO::PARAM_STR);
        $query->bindParam(':date',$date,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->execute();

        $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
        $os=UserInfo::get_os();
        $ip = file_get_contents('https://api.my-ip.io/ip');
        $country=getCountry($ip);
        $address=getteamlocation($dbh);

        send_verificationcode($dbh,$getname, $email, $code,$address,$os,$browser,$ip,$country);
        echo 1;

       // header('location: verify' );
    }
  
    else{
      $date =  date("m/d/Y h:i:s a", time());  
      $sql="INSERT INTO emailconfirmation(email,code,date)VALUES(:email,:code,:date)";
      $query=$dbh->prepare($sql);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->bindParam(':code',$code,PDO::PARAM_STR);
      $query->bindParam(':date',$date,PDO::PARAM_STR);
      $query->execute();

      $browser=UserInfo::get_browser()." - ".UserInfo::get_device();
      $os=UserInfo::get_os();
      $ip = file_get_contents('https://api.my-ip.io/ip');
      $country=getCountry($ip);
      $address=getteamlocation($dbh);

      send_verificationcode($dbh,$getname, $email, $code,$address,$os,$browser,$ip,$country);
  echo 1;

        
  
    }
      }
  



  }



  if(isset($_POST['action'])){
    if($_POST['action']=='sendcontactus'){
    $name=ucfirst($_POST['name']);
    $subject=ucfirst($_POST['subject']);
    $message=ucfirst($_POST['message']);
    $email=$_POST['email'];

   // echo $_POST['email'];

    


    
		$sql="INSERT INTO contactus(name,subject,message,email)VALUES(:name,:subject,:message,:email)";
		$query=$dbh->prepare($sql);
		$query->bindParam(':name',$name,PDO::PARAM_STR);
		$query->bindParam(':subject',$subject,PDO::PARAM_STR);
		$query->bindParam(':message',$message,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->execute();
    $address=getteamlocation($dbh);
    send_email($dbh,$name, $email, $subject,$message, $address);
    echo 1;


  
    }
    
  }

  
?>