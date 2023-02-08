<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();
include('C:\xampp\htdocs\Overflow\views\UserInfo.php');


if (isset($_SESSION['admin'])){
	header('location:admin');
}
if (isset($_SESSION['user'])){
	header('location:dashboard');
}


$username="";



$folder_name='../files/user/user_1awelpOiQUmfZ0F7MxPg';
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
		return round($bytes / $mb,2) . ' MB';
		
		} elseif (($bytes >= $gb) && ($bytes < $tb)) {
		return round($bytes / $gb,2) . ' GB';
		
		} elseif ($bytes >= $tb) {
		return round($bytes / $tb,2) . ' TB';
		} else {
		return $bytes . ' B';
		}
		}
	//	echo(' Used space: ');

	//	echo sizeFormat(folderSize($folder_name));

	//	echo(' Limit: ');
	//	$limit = 524288000; //500 mb
	//	echo sizeFormat($limit);
		//$diskused=$count_size-$limit;
	//	$diskused=$limit-$_SESSION['diskused'];
	//	$used=$_SESSION['diskused'];
	//	echo(' Remaining space: ');

	//	if($diskused<0){
		//	$diskused=0;
		//echo sizeFormat($diskused);
	//	}else{
		//	echo sizeFormat($diskused);

	//	}
		
//
	//	if($used>$limit){

	//		echo ' you used all your storage, please upgrade!';
	//	}
	//	else{
	//		echo ' not ';
	//	}
//

//	$folder = array_filter(glob('*'),scandir('../files/user/')); 
//		if(count($folder) > 0) { 
	//		foreach($folder as $name) 
	//		{ echo $name; //	echo (count(scandir($name)) - 2); //	echo sizeFormat($folder); 




	//		}}


//	$path = 'https://i.ibb.co/yXnB2vq/634904078362.png';
//	echo $path."<br/>";
////	$name = basename($path);
//	$dir = dirname($path); 
//	echo $name."<br/>";
//	echo $dir."<br/>";
//	$pi = pathinfo($path);
//	$txt = $pi['filename']."_trans";
//	$ext = $pi['extension'];
//	echo $dir."/".$txt.".".$ext;



		//	$dir ="../files/user/";
			//delete old profile pic
		//	foreach(glob($dir . '/*') as $file){

		//		echo $file;

		//	}
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
	<head>
		
		<title>Overflow - Sign in</title>
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
		<script>
		if(window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
		}
		</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../Overflow/views/index.html" class="mb-12">
						<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="h-60px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" method="post" id="kt_sign_in_form" action="#">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Sign In to Overflow</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">New Here?
								<a href="../../Overflow/views/sign-up" class="link-primary fw-bolder">Create an Account</a></div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Username</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" id="username" value="<?php if(empty($_COOKIE['username'])) echo $username;if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>" type="text" name="username" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!--end::Label-->
										<!--begin::Link-->
										<a href="../../Overflow/views/password-reset" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" value="<?php if(isset($_COOKIE['password']))echo $_COOKIE['password'];?>"  type="password" name="password" autocomplete="off" />
									<!--end::Input-->
								</div>
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
									
							<label class="form-check form-check-custom form-check-solid form-check-inline">
									<input class="form-check-input" type="checkbox" value="1"  name="remember"  />
									<span class="form-check-label fw-bold text-gray-700 fs-6">Keep me signed in
								
								</label>
								</div>
								<br>




							
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
								<!--end::Separator-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="aboutus" class="text-muted text-hover-primary px-2">About</a>
						<a href="ourteam" class="text-muted text-hover-primary px-2">Team</a>
						<a href="contactus" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page) <script src="assets/js/custom/authentication/sign-in/general.js"></script>-->
		
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script src="assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
		





		<script>
"use strict";

// Class definition
var KTSigninGeneral = function() {
    // Elements
    var form;
    var submitButton;
    var validator;

	var password = document.getElementById("password");


    // Handle form
    var handleForm = function(e) {
		const us = document.getElementById("username");

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {					
					'username': {
						verbose:false,
                        validators: {
                            notEmpty: {
                                message: 'Username is required!'
                            },
						
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'Invalid Username!'
								},
							remote: {
								message: 'You are not registered!',
								url: '_crud.php',
								data: function () {
                                return {
                                    username: form.querySelector('[name="username"]').value,
									action: 'userlogincheck',

                                };
                            },
								type: 'GET'
							},
                        }
                    },
					
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
							remote: {
								
								message: 'Wrong Password!',
								url: '_crud1.php',
								data: function () {
                                return {
                                    password: form.querySelector('[name="password"]').value,
									username: form.querySelector('[name="username"]').value,
									action: 'checkloginpass',

                                };
                            },
								type: 'GET'
							},
                        }
                    } 
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
				}
			}
		);		

        // Handle form submit
        submitButton.addEventListener('click', function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click 
                    submitButton.disabled = true;
                    

						var form=$('#kt_sign_in_form')[0];
							var formdata=new FormData(form);
							formdata.append('action', 'login');
							//var id1 = userid;

							$.ajax({
								type: 'POST',
								url: '_crud1.php',
								data: formdata,
								enctype: 'multipart/form-data',
								contentType:false,
								processData:false,
								cache: false,
                    			//timeout: 800000,
								success: function (response) {

									    // Simulate ajax request
					setTimeout(function() {
                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

							//	alert(response);

								Swal.fire({
                                text: "Successfully Logged in!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
								}).then(function (result) {
										if (result.isConfirmed) {

											if(response==1){
												location.href = 'admin';
											//	alert('admin');
											}
											else if(response==2){
												location.href = 'dashboard';
										//	alert('user');

											}
											else{

												location.href = '';

												//alert('error');
											}

										
										//	form.reset(); // Reset form	
										//	modal.hide();
										//	window.location.href = 'users';
									
								
										}
									});

								}, 2000);   
								}
								
							});

                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                   
                   						
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
		});
    }

    // Public functions
    return {
        // Initialization
        init: function() {
            form = document.querySelector('#kt_sign_in_form');
            submitButton = document.querySelector('#kt_sign_in_submit');
            
            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSigninGeneral.init();
});

			</script>
		
	</body>

	
	<!--end::Body-->
</html>