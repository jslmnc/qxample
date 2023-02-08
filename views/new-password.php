<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();
include('C:\xampp\htdocs\Overflow\views\UserInfo.php');



if (isset($_SESSION['id'])){
	header('location:index');
}

//$_SESSION['p']='yes';
$_SESSION['p']='yes';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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


$errors = array('password'=>'','cpassword'=>'');

if(isset($_GET['uid'])){
	
	
	$email=decry($_GET['uid']);

}

if(isset($_GET['token'])){
	
	
	$reset_token=$_GET['token'];

}


	$sql="SELECT * FROM passreset WHERE reset_token=:reset_token and email=:email";
    $query=$dbh->prepare($sql);
    $query->bindParam(':reset_token',$reset_token,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);

    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
	if($query->rowCount()>0)
	{
	//	$date =  date("m/d/Y h:i:s a", time());  

		$startdate = $results['date'];
	//	echo 'start: '.$startdate;
	//	echo $startdate;
	//	$expire = strtotime($startdate.' +1 hour');

		$date =  date("m/d/Y h:i:s a", time());  
	//echo 'current time: '.$date.' ';
	//	$expire =strtotime("{$startdate} +1 hour");
	//	$expire=date($startdate , strtotime('+1 hour'));

		//$expire=date($startdate, "+1 hours");
		

		$expire=date("m/d/Y h:i:s a", strtotime($startdate .' +1 hours'));
	//	echo 'expire time: '.$expire. ' ';

	//	echo $expire;
//$expire = strtotime($startdate. ' + 1 hr');
//$today = strtotime("today midnight");

		if(strtotime($expire)<=strtotime($date) ){
			
				header('location:invalid-link');

		//	echo '= expired';



		} else {

		//	header('location:invalid-link');
	//	echo '= not expired';
		}
	}
	else{
		header('location:invalid-link');
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
		<title>Overflow - New Password</title>
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
			<!--begin::Authentication - New password -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="" class="mb-12">
						<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="h-60px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-550px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_new_password_form">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Setup New Password</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
								<a href="sign-in" class="link-primary fw-bolder">Sign in here</a></div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" type="password" id="password"placeholder="" name="password" oninput="checkPassword()"autocomplete="off" />
										<div id="check-password" ></div>
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--begin::Input group=-->
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="cpassword" autocomplete="off" />
							</div>

							<div class="modal fade" id="kt_modal_toc" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Terms and Condition</h1>
							<div class="text-muted fw-bold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
				
						<div class="card">
							<!--begin::Body-->
							<div class="card-body p-5 px-lg-19 py-lg-16">
								<!--begin::Content main-->
								<div class="mb-14">
									<!--begin::Heading-->
									<div class="mb-15">
										<!--begin::Title-->
										<h1 class="fs-2x text-dark mb-6">License Comparision</h1>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="fs-5 text-gray-600 fw-bold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
										<!--end::Text-->
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<!--begin::Table-->
									<div class="mb-14">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder fs-6 text-gray-800 text-center border-0 bg-light">
														<th class="min-w-200px rounded-start"></th>
														<th class="min-w-140px">Regular</th>
														<th class="min-w-120px">Multiple</th>
														<th class="min-w-100px rounded-end">Extended</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="border-bottom border-dashed">
													<tr class="fw-bold fs-6 text-gray-800 text-center">
														<td class="text-start ps-6 fs-4">Number of end products or domains</td>
														<td>1</td>
														<td>Unlimited</td>
														<td>1</td>
													</tr>
													<tr class="text-center">
														<td class="text-start ps-6">
															<div class="fw-bold fs-4 text-gray-800">Free end product</div>
														</td>
														<td>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--SVG file not found: 0-->
														</td>
														<td>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--SVG file not found: 0-->
														</td>
														<td>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--SVG file not found: 0-->
														</td>
													</tr>
													<tr class="text-center">
														<td class="text-start ps-6">
															<div class="fw-bold fs-4 text-gray-800">End product with paid services</div>
														</td>
														<td>
															<!--SVG file not found: 0-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</td>
														<td>
															<!--SVG file not found: 0-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</td>
														<td>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																	<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--SVG file not found: 0-->
														</td>
													</tr>
													<tr class="text-center">
														<td class="text-start ps-6">
															<div class="fw-bold fs-4 text-gray-800">Use in derivative themes or “generators”</div>
														</td>
														<td>
															<!--SVG file not found: 0-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</td>
														<td>
															<!--SVG file not found: 0-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</td>
														<td>
															<!--SVG file not found: 0-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2x svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end::Table-->
									<!--begin::Block-->
									<div class="mb-20 pb-lg-20">
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark mb-8">Regular License:</h2>
										<!--end::Title-->
										<!--begin::List-->
										<ul class="fs-4 fw-bold mb-6">
											<li>
												<span class="text-gray-700">E-commerce site</span>
											</li>
											<li class="my-2">
												<span class="text-gray-700">Company business activity dashboard</span>
											</li>
											<li>
												<span class="text-gray-700">Customer support center</span>
											</li>
										</ul>
										<!--end::List-->
										<!--begin::Text-->
										<div class="fs-4 fw-bold text-gray-700 mb-13">If users can free browse and use your website or Admin Panel is used only as interface(eCommerce site) to sell other's products you can use Regular license.
										<br />If you are going to use the item on one domain and multiple subdomains, you only require one Licence.(ex: www.
										<span class="text-dark">domain.com</span>/site1 – site2.
										<span class="text-dark">domain.com</span>– site.3.
										<span class="text-dark">domain.com</span>).</div>
										<!--end::Text-->
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark mb-7">Multisite License:</h2>
										<!--end::Title-->
										<!--begin::List-->
										<ul>
											<li>
												<span class="fs-4 fw-bold text-gray-700">It works the same as the Standard License, but you can use it in unlimited count of projects.</span>
											</li>
										</ul>
										<!--end::List-->
										<!--begin::Text-->
										<div class="fs-4 fw-bold text-gray-700 mb-13">If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. if you are going to use the item on multiple domains, then you will need to purchase a Licence for each domain or buy Multisite License.
										<br />(ex: www.domain-site-
										<span class="text-dark">one.com</span>– www.domain-site.
										<span class="text-dark">two.com</span>– www.site-three-
										<span class="text-dark">domain.com</span>).</div>
										<!--end::Text-->
										<!--begin::Title-->
										<h2 class="fw-bolder text-dark mb-8">Extended License:</h2>
										<!--end::Title-->
										<!--begin::List-->
										<ul class="fs-4 fw-bold mb-6">
											<li>
												<span class="text-gray-700">SaaS projects</span>
											</li>
											<li class="my-2">
												<span class="text-gray-700">Photo stock with PRO subscription</span>
											</li>
											<li>
												<span class="text-gray-700">Cloud service with paid plans</span>
											</li>
										</ul>
										<!--end::List-->
										<!--begin::Text-->
										<div class="fs-4 fw-bold text-gray-700">E-commerce site Company business activity dashboard Customer support center If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. If you are going to use the item on one domain and multiple subdomains, you only require one Licence . (ex: www.domain.com/site1 – site2.domain.com – site.3.domain.com).</div>
										<!--end::Text-->
									</div>
									<!--end::Block-->
									<!--end::Body-->
								</div>
								<!--end::Content main-->
								<!--begin::Card-->
								<div class="card mb-4 bg-light text-center mb-4">
									<!--begin::Body-->
									<div class="card-body py-12">
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Body-->
						</div>
			
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<a type="button"  class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a type="button" data-bs-dismiss="modal" onclick="document.getElementById('toc').checked = true" class="btn btn-primary">Okay</a>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
							<!--end::Input group=-->
							<!--begin::Input group=-->
							<div class="fv-row mb-10">
								<div class="form-check form-check-custom form-check-solid form-check-inline">
									<input class="form-check-input" type="checkbox" id="toc" name="toc" value="1" />
									<label class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
									<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_toc" class="ms-1 link-primary">Terms and conditions</a>.</label>
								</div>
							</div>
							<!--end::Input group=-->
							<!--begin::Action-->
							<div class="text-center">
								<button type="button" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Action-->
							<input hidden value="<?php if(isset($_GET['token']))echo $_GET['token'];?>" class="form-control form-control-lg form-control-solid"  name="token"  />
							<input hidden value=" <?php if(isset($_GET['uid']))echo decry($_GET['uid']);?>" class="form-control form-control-lg form-control-solid"  name="email" />
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
			<!--end::Authentication - New password-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page) 	
		
		<script src="assets/js/custom/authentication/password-reset/new-password.js"></script>-->
	
		<!--end::Page Custom Javascript-->

		<script src="assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
		




		<script>
"use strict";

// Class Definition
var KTPasswordResetNewPassword = function() {
    // Elements
    var form;
    var submitButton;
    var validator;
    var passwordMeter;

    var handleForm = function(e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
			form,
			{
				fields: {					 
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
						
						//	regexp: {
							//	regexp: /^(?=(.*[a-z]){1,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$/,
							///	message: 'Use 8 or more characters with a mix of letters, numbers symbols.',
							//},
							///^(?=(.*[a-z]){1,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){2,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$/
                            callback: {
                                message: 'Use 8 or more characters with a mix of letters, numbers &amp; symbols.',
                                callback: function(input) {
                                    if (input.value.length > 0) {        
                                        return validatePassword();
                                    }
                                }
                            }
                        }
                    },
                    'cpassword': {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                    'toc': {
                        validators: {
                            notEmpty: {
                                message: 'You must accept the terms and conditions'
                            }
                        }
                    }
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: false
                        }  
                    }),
					bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
				}
			}
		);

	//	const submitButton = element.querySelector('[data-kt-editusers-modal-action="submit"]');


        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validator.revalidateField('password');

            validator.validate().then(function(status) {
		        if (status == 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click 
                    submitButton.disabled = true;

                    // Simulate ajax request
                        // Simulate ajax request
					var form=$('#kt_new_password_form')[0];
					//var email = document.getElementById("email");

							var formdata=new FormData(form);
							formdata.append('action', 'newpass');

						//	formData.set('email', email);
							//formdata.append('email', email);

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
								

									//console.log(response);
								//	alert(response);

					setTimeout(function() {
                        // Hide loading indication
                        submitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        submitButton.disabled = false;

							//	alert(response);

								Swal.fire({
                                text: "Password successfully changed!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
								}).then(function (result) {
										if (result.isConfirmed) {
										//	alert(response);
											if(response==1){
											//	alert(response);
												location.href = 'password-confirmation';
												//alert('error');
											}
										else{

												Swal.fire({
												text: "some error.",
												icon: "error",
												buttonsStyling: false,
												confirmButtonText: "Ok, got it!",
												customClass: {
													confirmButton: "btn btn-primary"
												}
											});
											}
											
										//	form.reset(); // Reset form	
										//	modal.hide();
										//	window.location.href = 'users';
									
								
										}
									});

								}, 2100);   
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

        form.querySelector('input[name="password"]').addEventListener('input', function() {
            if (this.value.length > 0) {
                validator.updateFieldStatus('password', 'NotValidated');
            }
        });
    }

    var validatePassword = function() {
        

        return  (passwordMeter.getScore() === 100);
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            form = document.querySelector('#kt_new_password_form');
            submitButton = document.querySelector('#kt_new_password_submit');
            passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            handleForm();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTPasswordResetNewPassword.init();
});

			</script>


<script>
			function checkPassword() {
				
					jQuery.ajax({
					url: "check.php",
					data:'rpassword='+$("#password").val(),
					type: "POST",
					success:function(data){
					$("#check-password").html(data);
				
					},
					error:function (){}
					});
			}
  </script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>