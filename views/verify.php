<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 
//unset($_SESSION['email']);

if (isset($_SESSION['c'])){
	header('location:logout');
} 


$_SESSION['p']='yes';

if (!isset($_SESSION['email'])){

	header('location:sign-in');

	
}

if (isset($_SESSION['id'])){
	header('location:index');
}
//if(isset($_SESSION['email'])){
//	unset($_SESSION['email']);
//}

	$num1='';
	$num2='';
	$num3='';
	$num4='';
	$num5='';
	$num6='';

	$fname='';
	$lname='';
	$username='';
	$password='';
//	$_SESSION['email']=$cpassword;
	$role='';
	$email='';

	$_SESSION['status']='';
	$_SESSION['status_code']='';
	


//	$image='default.jpg';



if (isset($_POST['submit'])) 
{	$num1=($_POST['num1']);
	$num2=($_POST['num2']);
	$num3=($_POST['num3']);
	$num4=($_POST['num4']);
	$num5=($_POST['num5']);
	$num6=($_POST['num6']);



	$fname=$_SESSION['ufname'];
	$lname=$_SESSION['ulname'];
	$username=$_SESSION['uusername'];
	$password=$_SESSION['upassword'];
//	$_SESSION['email']=$cpassword;
	$role=$_SESSION['urole'];
	$email=$_SESSION['uemail'];
	$image=$_SESSION['uimage'];
	//echo $image;

	$getname=$_SESSION['ufname']. ' '.$_SESSION['ulname'];

$code=$num1.$num2.$num3.$num4.$num5.$num6;

//echo $email;


	if(!empty($num1)||!empty($num2)||!empty($num3)||!empty($num4)||!empty($num5)||!empty($num5))
	{

		$_SESSION['status']='Not empty!';
		$_SESSION['status_code']='success';

		$sql="SELECT * FROM emailconfirmation WHERE code=:code and email=:email";
		$query=$dbh->prepare($sql);
		$query->bindParam(':code',$code,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);

		$query->execute();
		$results=$query->fetch(PDO::FETCH_ASSOC);
		if($query->rowCount()>0)
		{


		
//if (!is_dir("...user/".$username)) {
//	mkdir("...user/".$username, 0777,true);
//	mkdir("...user/".$username."/profile", 0777,true);
//}


//create user directory
//$useruniqueid=md5(rand());
$length = 20;    
$s=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$randomid = 'user_'.$s;

$sql="SELECT * FROM user WHERE uid=:uid";
$query=$dbh->prepare($sql);
$query->bindParam(':uid',$randomid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
  

$length = 20;    
$s=substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$randomid = 'user_'.$s;


}
else{

	$randomid = 'user_'.$s;

}



if (!is_dir("../files/user/".$randomid."/profile")) {
//mkdir("../username", 0777,true);
	mkdir("../files/user/".$randomid."/profile", 0777,true);

	mkdir("../files/user/".$randomid."/user_files", 0777,true);

}

copy("../default.jpg", "../files/user/".$randomid."/profile/default.jpg");

	
	
		$status="offline";
		$type="active";
	$sql="INSERT INTO user(role,uid,fname,lname,email,username,password,status,type,image)VALUES(:role,:uid,:fname,:lname,:email,:username,:password,:status,:type,:image)";
	$query=$dbh->prepare($sql);
	$query->bindParam(':role',$role,PDO::PARAM_STR);
	$query->bindParam(':uid',$randomid,PDO::PARAM_STR);
		$query->bindParam(':fname',$fname,PDO::PARAM_STR);
		$query->bindParam(':lname',$lname,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		  $query->bindParam(':username',$username,PDO::PARAM_STR);
			$query->bindParam(':password',$password,PDO::PARAM_STR);
			$query->bindParam(':status',$status,PDO::PARAM_STR);
			$query->bindParam(':type',$type,PDO::PARAM_STR);
			

			$query->bindParam(':image',$image,PDO::PARAM_STR);


			$_SESSION['status']='Valid code!';
			$_SESSION['status_code']='success';

			confirmed_email($getname, $email,$dbh);
		
			$query->execute();

			$stat="FREE";
			$planID="P-43D83489P8625140WMLGGGNP"; //free default planid

			$now=  $date =  date("m/d/Y h:i:s a", time());  

		$subscriberID='I-'.substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,12);
		$sql="INSERT INTO subscription(userid,status,subscriberID,planID,startTime)VALUES(:userid,:status,:subscriberID,:planID,:startTime)";
		$query=$dbh->prepare($sql);
		$query->bindParam(':userid',$randomid,PDO::PARAM_STR);
		$query->bindParam(':status',$stat,PDO::PARAM_STR);
		$query->bindParam(':subscriberID',$subscriberID,PDO::PARAM_STR);
		$query->bindParam(':planID',$planID,PDO::PARAM_STR);
		$query->bindParam(':startTime',$now,PDO::PARAM_STR);

			$query->execute();


			header('location:email-confirmed');


		

		}
		else{

			$_SESSION['status']='Invalid code!';
			$_SESSION['status_code']='error';
		}

	}
	else{

		$_SESSION['status']='Empty fields!';
		$_SESSION['status_code']='error';
	//	echo 'empty';
	}

//echo $num1.$num2.$num3.$num4.$num5.$num6;
	
   }




   function confirmed_email($getname, $email,$dbh){



	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	
		//Server settings
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
	 
		   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		}}
		//Attachments
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Email Confirmed';
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
							<div style="padding-bottom: 30px">You successfully confirmed your email, you are officially registered!</div>
							<div style="padding-bottom: 30px">You can now sign in at: </div>

							<div style="padding-bottom: 40px; text-align:center;">
								<a href="localhost/Overflow/views/sign-in" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Sign in</a>
							</div>
							<div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
							<!--end:Email content-->
							<div style="padding-bottom: 10px">Kind regards,
							<br>The Overflow Team.
							<tr>
								<td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
									<p>Cebu, PH</p>
									<p>Copyright ©
									<a href="landing" rel="noopener" target="_blank">Overflow</a>.</p>
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

?>


<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Verify</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/overflowlogo.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link rel="stylesheet" href="assets/plugins/SweetAlert/dist/sweetalert2.min.css"/>
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Two-stes -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="" class="mb-12">
						<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="h-60px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form id="formid"class="form w-100 mb-10" method="post">
							<!--begin::Icon-->
							<div class="text-center mb-10">
								<img  class="mh-125px" src="assets/media/logos/email.png" />
							</div>
							<!--end::Icon-->
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Email Verification</h1>
								<!--end::Title-->
								<!--begin::Sub-title-->
								<div class="text-muted fw-bold fs-5 mb-5 ">Enter the verification code we sent to</div>
								<!--end::Sub-title-->
								<!--begin::Mobile no-->
								<a class="link-primary fw-bolder  fs-2 mb-2" ><?php echo $_SESSION['email'] ?></a>
								<!--end::Mobile no-->
							</div>
							<!--end::Heading-->
							<!--begin::Section-->
							<div class="mb-10 px-md-10">
								<!--begin::Label-->
								<div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">Type your 6 digit security code</div>
								<!--end::Label-->
								<!--begin::Input group-->
								<div class="d-flex flex-wrap flex-stack">
									<input name="num1" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num1 ?>" />
									<input name="num2" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num2 ?>" />
									<input name="num3" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num3 ?>" />
									<input name="num4" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num4 ?>" />
									<input name="num5" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num5 ?>" />
									<input name="num6" type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="<?php echo $num6 ?>" />
								</div>
								<!--begin::Input group-->
							</div>
							<!--end::Section-->
							<!--begin::Submit-->
							<div class="d-flex flex-center">
								<button type="submit"  id="btnid" name="submit" value="send"class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Submit-->
						</form>
						<!--end::Form-->
						<!--begin::Notice-->
						<div class="text-center fw-bold fs-5">
							<span class="text-muted me-1">Didn’t get the code ?</span>
							<a href="resend" type="submit" name="resend" class="link-primary fw-bolder fs-5 me-1">Resend</a>
							<span class="text-muted me-1">or</span>
							<a href="logout" type="submit" class="link-primary fw-bolder fs-5">Sign in</a>
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Two-stes-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/authentication/sign-in/two-steps.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script src="assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
  
	<script type="text/javascript">
	$('#formid').on('submit', function() {
    $(this).on('submit', function() {
        return false;
    });
	
 //   $('#button1').hide();
	//$('#showb').show();
	//$('#button1').prop('disabled', true);
	$("#btnid").html(" <span class='indicator-label'>Please wait...</span><span class='spinner-border spinner-border-sm align-middle ms-2'></span>");


	//$('#button1').prop('disabled', true);
	//$("button1").attr("disabled", true);
//	$('#buttonload').show();
  
    //return true;
});
</script>
		<?php
			if(isset($_SESSION['status'])&&$_SESSION['status']!='')
			{
				
?>
	<script>
			  Swal.fire({
                        text: "<?php echo $_SESSION['status']?>",
                        icon: "<?php echo $_SESSION['status_code']?>",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
							
                        }
                    });
					</script>
<?php


unset($_SESSION['status']);

				}

				?>
	</body>
	<!--end::Body-->
</html>