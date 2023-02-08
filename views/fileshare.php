<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


//$_SESSION[''];
//if (!isset($_SESSION['email'])){
//	header('location:sign-in');
//}
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


function getname($userid,$dbh){
	$sql="SELECT * FROM user WHERE uid=:uid";
	$query=$dbh->prepare($sql);
	$query->bindParam(':uid',$userid,PDO::PARAM_STR);
	
	$query->execute();
	$results=$query->fetch(PDO::FETCH_ASSOC);
	if($query->rowCount()>0)
	{
	//	$valid=true;
	//echo $results['notecontent'];
	return $name= $results['fname']. ' '. $results['lname'];
	
	}
	else{
	
		
	}


}

if(!isset($_GET['uid'])||!isset($_GET['id'])){

	header('location: invalid');


}


if(!empty($_GET['id'])){

	$path=decry($_GET['id']);
}

if(!empty($_GET['uid'])){

	$user=decry($_GET['uid']);
}

//echo '../files/user/'.$user.'/user_files/'.$path;

//echo $path;
//echo $user;

if(decry($_GET['uid'])!=$user){

	header('location: invalid');

}
$dir ="../files/user/".$user."/user_files/".$path."";
//delete old profile pic

  if(file($dir)){
	//echo $dir;
  }
  else{
	header('location: invalid');

		

  }



  if(isset($_POST['path']))
  {
  
  //Read the url
  $url = $_POST['path'];//
  
  //$_POST['path'];
  
  //Clear the cache
  clearstatcache();
  
  //Check the file path exists or not
  if (file_exists($url)) {

	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($url));
	header('Content-Transfer-Encoding: binary');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	ob_clean();
	flush();
	readfile($url);
	exit;



}
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
	<head>
		<title>Share file</title>
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

			<!--begin::Page Vendor Stylesheets(used by this page)-->
			<link href="assets/plugins/custom/leaflet/leaflet.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
		if(window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
		}
		</script>
		<!--end::Global Stylesheets Bundle-->
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Verify Email -->
			
				<!--begin::Content-->					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="../../Overflow/views/landing.html">
										<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="logo-default h-25px h-lg-30px" />
										<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="logo-sticky h-20px h-lg-25px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
										
											<!--end::Menu item-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->

								<?php
								if (isset($_SESSION['admin']) || isset($_SESSION['user'])) {
								//	header('location:logout');
									?>

<div class="flex-equal text-end ms-1">
									<a href="sign-in" class="btn btn-success">Home</a>
								</div>
								<?php
								}


								else{

									?>

<div class="flex-equal text-end ms-1">
									<a href="sign-in" class="btn btn-success">Sign In</a>
								</div>

<?php
								}
										
							?>
								
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					
				<div class="d-flex flex-column flex-column-fluid text p-10 py-lg-15">
					<!--begin::Logo-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
			
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Hero card-->
							
								<!--end::Hero card-->
								<!--begin::Contact-->


								<div class="card">
									<!--begin::Body-->
									<div class="card-body p-5 px-lg-19 py-lg-16">
										<!--begin::Content main-->
										<div class="mb-14">
											<!--begin::Heading-->
											<div class="mb-15">
										
											<!--begin::Card body-->
											<div class="card-body d-flex flex-center flex-column p-9">
												<!--begin::Wrapper-->
												<div class="mb-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-75px ">
													<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																</svg>
															</span>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Name-->
												<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0"><?php echo $path?></a>
												<!--end::Name-->
												<!--begin::Position-->
												<br>
												<div class="fw-bold text-gray-400 mb-6">Shared By <?php echo getname($user,$dbh)?></div>
												<!--end::Position-->
												<!--begin::Info-->
												<div class="d-flex flex-center flex-wrap mb-5">
													<!--begin::Stats-->
												
													<!--end::Stats-->
													<!--begin::Stats-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
														<div  style="text-align:center" class="fs-6 fw-bolder text-gray-700"><?php function sizeFormat($bytes){ 
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
														} echo sizeFormat(filesize('../files/user/'.$user.'/user_files/'.$path))?></div>
														<div style="text-align:center"class="fw-bold text-gray-400">Size</div>
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
												<!--begin::Link-->
												<form name="myForm" id="myForm" method="post" >
																		<input hidden name="path" value="<?php echo '../files/user/'.$user.'/user_files/'.$path?>"/>
																		
												<button onclick="document.getElementById('myForm').submit();" class="btn btn-sm btn-light-primary fw-bolder" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Download</button>
												<!--end::Link-->
												</form>
											</div>
											<!--begin::Card body-->
										

									
												
 
												
											

											
											
											

												
												<!--end::Text-->
											</div>

											
							<!--end::Heading-->
											<!--begin::Body-->
											<!--begin::Table-->
									

	
											<!--end::Table-->
											<!--begin::Block-->
									
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
					
								<!--end::Modal - Support Center - Create Ticket-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
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
			
			<!--end::Authentication - Signup Verify Email-->
		</div>



		<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
		
			
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
</form>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->





		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>



	</body>
	<!--end::Body-->
</html>