<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


if (isset($_SESSION['admin'])){
}

elseif (isset($_SESSION['user'])){
}
else{
	header('location:logout');
}

//count roles distinct


if(isset($_GET['id'])){

$userid=$_GET['id'];
}



function getsubscriptionstat($dbh, $userid){


	$sql="SELECT * FROM subscription WHERE userid=:userid ";
    $query=$dbh->prepare($sql);
    $query->bindParam(':userid',$userid,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
     return $results['status'];
	 //$results[''];
      
    }
    else{
   
    
    }


}


function getplanid($dbh,$userid){


	$sql="SELECT * FROM subscription WHERE userid=:userid ";
    $query=$dbh->prepare($sql);
    $query->bindParam(':userid',$userid,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
     return $results['planID'];
	 //$results[''];
      
    }
    else{
   
    
    }

}

function getplanname($dbh,$planID){


	$sql="SELECT * FROM plans WHERE planID=:planID ";
    $query=$dbh->prepare($sql);
    $query->bindParam(':planID',$planID,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
     return $results['plan_name'];
	 //$results[''];
      
    }
    else{
   
    
    }

}

//echo '<script>alert('.$type.')</script>';	

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
		<title>View User</title>
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
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->

				<?php 

if($_SESSION['role']=='admin'){

	include('C:\xampp\htdocs\Overflow\includes\asideadmin.php');
}

else{
	include('C:\xampp\htdocs\Overflow\includes\asideuser.php');

}
?>


				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<?php 



include('C:\xampp\htdocs\Overflow\includes\header.php');

?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> View User</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../Overflow/views/index.html" class="text-muted text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Users List</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark"> View User</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->
								
									<!--end::Filter menu-->
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<a href="../../Overflow/views/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->

						
	

						<!--begin::Post-->
					  
					  
							  
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-lg-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
										<!--begin::Card-->
										<?php
						
						
						$sql="SELECT * FROM user where uid ='".$userid."'";
						$query=$dbh->prepare($sql);
						
						$query->execute();
						$results=$query->fetchALL(PDO::FETCH_OBJ);
					  
						$cnt=1;
						if ($query->rowCount()>0) {
						  # code...
						  foreach ($results as $result) 
						  {
							# code...
					 
						
					  
					  
						?>
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body">
												<!--begin::Summary-->
												<!--begin::User Info-->
												<div class="d-flex flex-center flex-column py-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-100px symbol-circle mb-7">
													<img src="<?php echo "../files/user/".($result->uid)."/profile/".($result->image).""?>
" alt="image" class="w-100" />
										
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3"><?php echo htmlentities(ucfirst($result->fname).''.ucfirst($result->lname))?></a>
													<!--end::Name-->
													<!--begin::Position-->
													
													<div class="mb-9">
														<!--begin::Badge-->
														<?php 
														
													
														
														if(($result->role)=='admin'){
															
														?>
														
														<div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
														<?php }



															else if(getsubscriptionstat($dbh,$result->uid)){
															//	$planid=getplanid($dbh,$result->id);
														?>	<div class="badge badge-lg badge badge badge-light-info d-inline"><?php echo getplanname($dbh, getplanid($dbh,$result->uid))?></div>

															<?php }
															else{
															
															?>

															<div class="badge badge-lg badge badge-light-success d-inline">Free Account</div>
																<?php
															}
																
																?>
														<!--begin::Badge-->
													</div>
													<!--end::Position-->
													<!--begin::Info-->
													<!--begin::Info heading-->
													
													<div class="d-flex flex-wrap flex-center">
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-75px">243</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Notes</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">56</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Share</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">188</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Storage</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::User Info-->
												<!--end::Summary-->
												<!--begin::Details toggle-->
												<div class="d-flex flex-stack fs-4 py-3">
													<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
														<a href="#" class="btn btn-sm btn-light-primary edit_data"  data-bs-target="#kt_modal_edit_user1<?php echo htmlentities($result->id)?>" value ="<?php echo htmlentities($result->id)?>"   data-bs-toggle="modal">Edit</a>
													</span>
												</div>
												<!--end::Details toggle-->
												<div class="separator"></div>
												<!--begin::Details content-->
												<div id="kt_user_view_details" class="collapse show">
													<div class="pb-5 fs-6">
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Account ID</div>
														<div class="text-gray-600"><?php echo htmlentities('ID-'.$result->id.'-'.$result->uid)?></div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Email</div>
														<div class="text-gray-600">
															<a href="#" class="text-gray-600 text-hover-primary"><?php echo htmlentities($result->email)?></a>
														</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Status</div>
														<div class="text-gray-600"> <span class="badge badge-light-success"><?php echo ($result->status)?></span></span></div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Date Joined</div>

														<div class="text-gray-600"><?php echo ($result->date_create)?></div>
														<!--begin::Details item-->
													</div>
												</div>
												<!--end::Details content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
								
										<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
?>
	

										<!--begin::Connected Accounts-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card header-->
											<div class="card-header border-0">
												<div class="card-title">
													<h3 class="fw-bolder m-0">Connected Accounts</h3>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-2">
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
															<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
															<a href="#" class="me-1">privacy policy</a>and
															<a href="#">terms of use</a>.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--begin::Items-->
												<div class="py-2">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
																<div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<!--begin::Switch-->
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_google"></span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Item-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
																<div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<!--begin::Switch-->
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github"></span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Item-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<div class="d-flex">
															<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
															<div class="d-flex flex-column">
																<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
																<div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
															</div>
														</div>
														<div class="d-flex justify-content-end">
															<!--begin::Switch-->
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
																<!--end::Input-->
																<!--begin::Label-->
																<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_slack"></span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer border-0 d-flex justify-content-center pt-0">
												<button class="btn btn-sm btn-light-primary">Save Changes</button>
											</div>
											<!--end::Card footer-->
										</div>
										<!--end::Connected Accounts-->
									</div>
									
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<li class="nav-item ms-auto">
												<!--begin::Action menu-->
												<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
												<span class="svg-icon svg-icon-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
													<!--begin::Menu item-->
													
													<!--end::Menu item-->
													<!--begin::Menu item-->
													
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
														<a href="#" class="menu-link px-5">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-5">Apps</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-5">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-5">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																		<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
																	</label>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-3"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-5">
														<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5">
														<a href="#" class="menu-link px-5">Reports</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5 my-1">
														<a href="#" class="menu-link px-5">Account Settings</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-5">
														<a href="#" class="menu-link text-danger px-5">Delete User</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
												<!--end::Menu-->
											</li>
											<!--end:::Tab item-->
										</ul>
										<!--end:::Tabs-->
										<!--begin:::Tab content-->
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
												<!--begin::Card-->
												<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
												<div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
													<?php if($result->role=='admin'){
													
														
														?>
														

														<?php 
														
														
													}else{?>
													<div class="col">




																				

													<!--begin::Card-->
													<div class="card pt-4 h-md-100 mb-6 mb-md-0">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2 class="fw-bolder">Stats</h2>
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<div class="fw-bolder fs-2">
															<div class="col-lg-15">
													<!--begin::Heading-->
													<div class="d-flex text-muted fw-bolder fs-5 mb-3">
													<span class="flex-grow-1 text-gray-800">Notes</span>
													<span class="text-gray-800">86 of 100 Used</span>

													<span class="text-gray-800">
 

</span>



													</div>
													<!--end::Heading-->
													<!--begin::Progress-->
													<div class="progress h-8px bg-light-primary mb-2">
													<div class="progress-bar bg-primary" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Description-->
													<!--end::Description-->
													<!--begin::Action-->

													<!--end::Action-->
													</div>
													<div class="col-lg-15">
													<!--begin::Heading-->
													<div class="d-flex text-muted fw-bolder fs-5 mb-3">
													<span class="flex-grow-1 text-gray-800">Storage</span>
													<span class="text-gray-800">86 of 100 Used</span>
													</div>
													<!--end::Heading-->
													<!--begin::Progress-->
													<div class="progress h-8px bg-light-primary mb-2">
													<div class="progress-bar bg-primary" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Description-->
													<!--end::Description-->
													<!--begin::Action-->

													<!--end::Action-->
													</div>
															</div>
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													</div>


															<?php
													}
															?>





													<?php if(($result->role)=='admin'){

															?>


													



													<div class="col">
														<!--begin::Reward Tier-->
														<a href="#" class="card bg-primary  hoverable h-md-100">
															<!--begin::Body-->
															<div class="card-body">
																<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M14 12V21H10V12C10 11.4 10.4 11 11 11H13C13.6 11 14 11.4 14 12ZM7 2H5C4.4 2 4 2.4 4 3V21H8V3C8 2.4 7.6 2 7 2Z" fill="currentColor"></path>
														<path d="M21 20H20V16C20 15.4 19.6 15 19 15H17C16.4 15 16 15.4 16 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor"></path>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Svg Icon-->
												<div class="text-white fw-bolder fs-2 mb-2 mt-5">Admin</div>
												<div class="fw-bold text-white">Admin</div>
															</div>
															<!--end::Body-->
														</a>
														<!--end::Reward Tier-->
													</div>
											
															<?php

													} else if($result->role&&getsubscriptionstat($dbh,$result->uid)=="ACTIVE"){
													$planid=getplanid($dbh,$result->id);

														getplanname($dbh,$planid);


																?>


												<div class="col">
														<!--begin::Reward Tier-->
														<a href="#" class="card bg-info hoverable  hoverable h-md-100">
															<!--begin::Body-->
															<div class="card-body">
																<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor"></path>
														<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor"></path>
														<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor"></path>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Svg Icon-->
												<div class="text-white fw-bolder fs-2 mb-2 mt-5">Paid User</div>
												<div class="fw-bold text-white">Plan Name: <?php echo 	getplanname($dbh,$planid); ?></div>
															</div>
															<!--end::Body-->
														</a>
														<!--end::Reward Tier-->
													</div>
											


														

												<?php




													}
													
													else{?>



													<?php 
													?>

												<div class="col">
														<!--begin::Reward Tier-->
														<a href="#" class="card bg-success  hoverable h-md-100">
															<!--begin::Body-->
															<div class="card-body">
																<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor"></path>
														<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor"></path>
														<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor"></path>
													</svg>
												</span>
												<!--end::Svg Icon-->
												<div class="text-white fw-bolder fs-2 mb-2 mt-5">Free User</div>
												<div class="fw-bold text-white">Free Member</div>
															</div>
															<!--end::Body-->
														</a>
														<!--end::Reward Tier-->
													</div>
													<?php


													}?>
													
												</div>
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Transaction History</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
															<!--begin::Table head-->
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<!--begin::Table row-->
																<tr class="text-start text-muted text-uppercase gs-0">
																	<th class="min-w-100px">order No.</th>
																	<th>Status</th>
																	<th>Amount</th>
																	<th class="min-w-100px">Rewards</th>
																	<th class="min-w-100px">Date</th>
																</tr>
																<!--end::Table row-->
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14670</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$1,200.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>120</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>14 Dec 2020, 8:43 pm</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14750</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$79.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>7</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Dec 2020, 10:12 am</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15932</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$5,500.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>550</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>12 Nov 2020, 2:01 pm</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15196</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Pending</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$880.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>88</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>21 Oct 2020, 5:54 pm</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15010</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$7,650.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>765</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>19 Oct 2020, 7:32 am</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15121</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$375.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>37</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>23 Sep 2020, 12:38 am</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14326</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$129.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>12</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>11 Sep 2020, 3:18 pm</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15638</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-danger">Rejected</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$450.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>45</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>03 Sep 2020, 1:08 am</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14623</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Pending</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$8,700.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td>870</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Sep 2020, 4:58 pm</td>
																	<!--end::Date=-->
																</tr>
																<!--end::Table row-->
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
												<!--end::Card-->
												<!--begin::Tasks-->
												<div class="card card-flush mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header mt-6">
														<!--begin::Card title-->
														<div class="card-title flex-column">
															<h2 class="mb-1">User's Tasks</h2>
															<div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
															<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
																	<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
																	<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Add Task</button>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body d-flex flex-column">
														<!--begin::Item-->
														<div class="d-flex align-items-center position-relative mb-7">
															<!--begin::Label-->
															<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
															<!--end::Label-->
															<!--begin::Details-->
															<div class="fw-bold ms-5">
																<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe branding logo</a>
																<!--begin::Info-->
																<div class="fs-7 text-muted">Due in 1 day
																<a href="#">Karina Clark</a></div>
																<!--end::Info-->
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																		<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Task menu-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-dark fw-bolder">Update Status</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																	<!--begin::Input group-->
																	<div class="fv-row mb-10">
																		<!--begin::Label-->
																		<label class="form-label fs-6 fw-bold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="3">In Process</option>
																			<option value="4">Rejected</option>
																		</select>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																			<span class="indicator-label">Apply</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Task menu-->
															<!--end::Menu-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center position-relative mb-7">
															<!--begin::Label-->
															<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
															<!--end::Label-->
															<!--begin::Details-->
															<div class="fw-bold ms-5">
																<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
																<!--begin::Info-->
																<div class="fs-7 text-muted">Due in 3 days
																<a href="#">Rober Doe</a></div>
																<!--end::Info-->
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																		<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Task menu-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-dark fw-bolder">Update Status</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																	<!--begin::Input group-->
																	<div class="fv-row mb-10">
																		<!--begin::Label-->
																		<label class="form-label fs-6 fw-bold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="3">In Process</option>
																			<option value="4">Rejected</option>
																		</select>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																			<span class="indicator-label">Apply</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Task menu-->
															<!--end::Menu-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center position-relative mb-7">
															<!--begin::Label-->
															<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
															<!--end::Label-->
															<!--begin::Details-->
															<div class="fw-bold ms-5">
																<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project Estimation</a>
																<!--begin::Info-->
																<div class="fs-7 text-muted">Due in 1 week
																<a href="#">Neil Owen</a></div>
																<!--end::Info-->
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																		<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Task menu-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-dark fw-bolder">Update Status</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																	<!--begin::Input group-->
																	<div class="fv-row mb-10">
																		<!--begin::Label-->
																		<label class="form-label fs-6 fw-bold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="3">In Process</option>
																			<option value="4">Rejected</option>
																		</select>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																			<span class="indicator-label">Apply</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Task menu-->
															<!--end::Menu-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center position-relative mb-7">
															<!--begin::Label-->
															<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
															<!--end::Label-->
															<!--begin::Details-->
															<div class="fw-bold ms-5">
																<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp; UX for Leafr CRM</a>
																<!--begin::Info-->
																<div class="fs-7 text-muted">Due in 1 week
																<a href="#">Olivia Wild</a></div>
																<!--end::Info-->
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																		<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Task menu-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-dark fw-bolder">Update Status</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																	<!--begin::Input group-->
																	<div class="fv-row mb-10">
																		<!--begin::Label-->
																		<label class="form-label fs-6 fw-bold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="3">In Process</option>
																			<option value="4">Rejected</option>
																		</select>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																			<span class="indicator-label">Apply</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Task menu-->
															<!--end::Menu-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center position-relative">
															<!--begin::Label-->
															<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
															<!--end::Label-->
															<!--begin::Details-->
															<div class="fw-bold ms-5">
																<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
																<!--begin::Info-->
																<div class="fs-7 text-muted">Due in 2 weeks
																<a href="#">Sean Bean</a></div>
																<!--end::Info-->
															</div>
															<!--end::Details-->
															<!--begin::Menu-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																		<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Task menu-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
																<!--begin::Header-->
																<div class="px-7 py-5">
																	<div class="fs-5 text-dark fw-bolder">Update Status</div>
																</div>
																<!--end::Header-->
																<!--begin::Menu separator-->
																<div class="separator border-gray-200"></div>
																<!--end::Menu separator-->
																<!--begin::Form-->
																<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																	<!--begin::Input group-->
																	<div class="fv-row mb-10">
																		<!--begin::Label-->
																		<label class="form-label fs-6 fw-bold">Status:</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																			<option></option>
																			<option value="1">Approved</option>
																			<option value="2">Pending</option>
																			<option value="3">In Process</option>
																			<option value="4">Rejected</option>
																		</select>
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="d-flex justify-content-end">
																		<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																		<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																			<span class="indicator-label">Apply</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Task menu-->
															<!--end::Menu-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Tasks-->
											</div>
											<!--end:::Tab pane-->
											<!--begin:::Tab pane-->
											<div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Profile</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table wrapper-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																<!--begin::Table body-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>Email</td>
																		<td>smith@kpmg.com</td>
																		<td class="text-end">
																			<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																						<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>Password</td>
																		<td>******</td>
																		<td class="text-end">
																			<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																						<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>Role</td>
																		<td>Administrator</td>
																		<td class="text-end">
																			<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																						<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title flex-column">
															<h2 class="mb-1">Two Step Authentication</h2>
															<div class="fs-6 fw-bold text-muted">Keep your account extra secure with a second authentication step.</div>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Add-->
															<button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor" />
																	<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Add Authentication Step</button>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
															<!--end::Add-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pb-5">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Content-->
															<div class="d-flex flex-column">
																<span>SMS</span>
																<span class="text-muted fs-6">+61 412 345 678</span>
															</div>
															<!--end::Content-->
															<!--begin::Action-->
															<div class="d-flex justify-content-end align-items-center">
																<!--begin::Button-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																			<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Button-->
																<!--begin::Button-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																			<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																			<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Button-->
															</div>
															<!--end::Action-->
														</div>
														<!--end::Item-->
														<!--begin:Separator-->
														<div class="separator separator-dashed my-5"></div>
														<!--end:Separator-->
														<!--begin::Disclaimer-->
														<div class="text-gray-600">If you lose your mobile device or security key, you can
														<a href='#' class="me-1">generate a backup code</a>to sign in to your account.</div>
														<!--end::Disclaimer-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title flex-column">
															<h2>Email Notifications</h2>
															<div class="fs-6 fw-bold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body">
														<!--begin::Form-->
														<form class="form" id="kt_users_email_notification_form">
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_0">
																		<div class="fw-bolder">Successful Payments</div>
																		<div class="text-gray-600">Receive a notification for every successful payment.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_1">
																		<div class="fw-bolder">Payouts</div>
																		<div class="text-gray-600">Receive a notification for every initiated payout.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_2">
																		<div class="fw-bolder">Application fees</div>
																		<div class="text-gray-600">Receive a notification each time you collect a fee from an account.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_3">
																		<div class="fw-bolder">Disputes</div>
																		<div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked='checked' />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_4">
																		<div class="fw-bolder">Payment reviews</div>
																		<div class="text-gray-600">Receive a notification if a payment is marked as an elevated risk.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_5">
																		<div class="fw-bolder">Mentions</div>
																		<div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_6">
																		<div class="fw-bolder">Invoice Mispayments</div>
																		<div class="text-gray-600">Receive a notification if a customer sends an incorrect amount to pay their invoice.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_7">
																		<div class="fw-bolder">Webhooks</div>
																		<div class="text-gray-600">Receive notifications about consistently failing webhook endpoints.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<div class='separator separator-dashed my-5'></div>
															<!--begin::Item-->
															<div class="d-flex">
																<!--begin::Checkbox-->
																<div class="form-check form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<label class="form-check-label" for="kt_modal_update_email_notification_8">
																		<div class="fw-bolder">Trial</div>
																		<div class="text-gray-600">Receive helpful tips when you try out our products.</div>
																	</label>
																	<!--end::Label-->
																</div>
																<!--end::Checkbox-->
															</div>
															<!--end::Item-->
															<!--begin::Action buttons-->
															<div class="d-flex justify-content-end align-items-center mt-12">
																<!--begin::Button-->
																<button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>
																<!--end::Button-->
																<!--begin::Button-->
																<button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
																	<span class="indicator-label">Save</span>
																	<span class="indicator-progress">Please wait...
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
																<!--end::Button-->
															</div>
															<!--begin::Action buttons-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Card body-->
													<!--begin::Card footer-->
													<!--end::Card footer-->
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
											<!--begin:::Tab pane-->
											<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Login Sessions</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Filter-->
															<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	<path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor" />
																	<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
																</svg>
															</span>
															<!--end::Svg Icon-->Sign out all sessions</button>
															<!--end::Filter-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table wrapper-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																<!--begin::Table head-->
																<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																	<!--begin::Table row-->
																	<tr class="text-start text-muted text-uppercase gs-0">
																		<th class="min-w-100px">Location</th>
																		<th>Device</th>
																		<th>IP Address</th>
																		<th class="min-w-125px">Time Spent</th>
																		
																	</tr>
																	<!--end::Table row-->
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody class="fs-6 fw-bold text-gray-600">
																<?php

//$sql="SELECT * from books INNER JOIN authors ON books.authorid = authors.authorid INNER JOIN category ON category.categoryid = books.categoryid  ";
function getid($dbh,$uid){

	$sql="SELECT * FROM user WHERE uid=:uid ";
    $query=$dbh->prepare($sql);
    $query->bindParam(':uid',$uid,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
		return $results['id'];	 //$results[''];
      
    }
  

	

}


  $sql="SELECT * FROM login_log where userid='".getid($dbh,$userid)."'";
  $query=$dbh->prepare($sql);
  
  $query->execute();
  $results=$query->fetchALL(PDO::FETCH_OBJ);

  $cnt=1;
  if ($query->rowCount()>0) {
    # code...
    foreach ($results as $result) 
    {
      # code...

  


  ?>
																	<tr>
																		<!--begin::Invoice=-->
																		<td><?php echo $result->location?></td>
																		<!--end::Invoice=-->
																		<!--begin::Status=-->
																		<td><?php echo $result->device?></td>
																		<!--end::Status=-->
																		<!--begin::Amount=-->
																		<td><?php echo $result->ip?></td>
																		<!--end::Amount=-->
																		<!--begin::Date=-->
																		<td><?php	if($result->timeout==null){
																echo '<span class="badge badge-light-danger fs-7 fw-bolder">Current</span>';

																
															}
															else{
																$datetime1 = new DateTime($result->timein);
																$datetime2 = new DateTime($result->timeout);
																$interval = $datetime1->diff($datetime2);
																echo '<span class="badge badge-light-primary fs-7 fw-bolder">'.$interval->format('%h').":".$interval->format('%i').":".$interval->format('%s')."".'</span>';

																//if($interval->format('%h')<24){
																	//echo ;


																//}
																//else{

																	//echo $interval->format('%i');
																//}
															//	echo '<span class="badge badge-light-success fs-7 fw-bolder">'.$interval->format('%h')." Hour/s ".$interval->format('%i')." Minutes".'</span>';
																
																
																
																
															}
															?></td>
																		<!--end::Date=-->
																		<!--begin::Action=-->
																	
																		<!--end::Action=-->
																	</tr>
																	<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
?>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Logs</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Button-->
															<button type="button" class="btn btn-sm btn-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																	<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																	<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Download Report</button>
															<!--end::Button-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body py-0">
														<!--begin::Table wrapper-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
																<!--begin::Table body-->
																<tbody>
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Badge=-->
																		<td class="min-w-70px">
																			<div class="badge badge-light-danger">500 ERR</div>
																		</td>
																		<!--end::Badge=-->
																		<!--begin::Status=-->
																		<td>POST /v1/invoice/in_5315_4014/invalid</td>
																		<!--end::Status=-->
																		<!--begin::Timestamp=-->
																		<td class="pe-0 text-end min-w-200px">10 Nov 2022, 10:30 am</td>
																		<!--end::Timestamp=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Badge=-->
																		<td class="min-w-70px">
																			<div class="badge badge-light-success">200 OK</div>
																		</td>
																		<!--end::Badge=-->
																		<!--begin::Status=-->
																		<td>POST /v1/invoices/in_7445_4506/payment</td>
																		<!--end::Status=-->
																		<!--begin::Timestamp=-->
																		<td class="pe-0 text-end min-w-200px">25 Jul 2022, 11:30 am</td>
																		<!--end::Timestamp=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Badge=-->
																		<td class="min-w-70px">
																			<div class="badge badge-light-success">200 OK</div>
																		</td>
																		<!--end::Badge=-->
																		<!--begin::Status=-->
																		<td>POST /v1/invoices/in_4996_5786/payment</td>
																		<!--end::Status=-->
																		<!--begin::Timestamp=-->
																		<td class="pe-0 text-end min-w-200px">25 Oct 2022, 6:05 pm</td>
																		<!--end::Timestamp=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Badge=-->
																		<td class="min-w-70px">
																			<div class="badge badge-light-success">200 OK</div>
																		</td>
																		<!--end::Badge=-->
																		<!--begin::Status=-->
																		<td>POST /v1/invoices/in_3841_7630/payment</td>
																		<!--end::Status=-->
																		<!--begin::Timestamp=-->
																		<td class="pe-0 text-end min-w-200px">21 Feb 2022, 6:05 pm</td>
																		<!--end::Timestamp=-->
																	</tr>
																	<!--end::Table row-->
																	<!--begin::Table row-->
																	<tr>
																		<!--begin::Badge=-->
																		<td class="min-w-70px">
																			<div class="badge badge-light-success">200 OK</div>
																		</td>
																		<!--end::Badge=-->
																		<!--begin::Status=-->
																		<td>POST /v1/invoices/in_3822_2935/payment</td>
																		<!--end::Status=-->
																		<!--begin::Timestamp=-->
																		<td class="pe-0 text-end min-w-200px">10 Mar 2022, 8:43 pm</td>
																		<!--end::Timestamp=-->
																	</tr>
																	<!--end::Table row-->
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Events</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Button-->
															<button type="button" class="btn btn-sm btn-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																	<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																	<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->Download Report</button>
															<!--end::Button-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body py-0">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
															<!--begin::Table body-->
															<tbody>
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																	<span class="badge badge-light-warning me-1">Pending</span>to
																	<span class="badge badge-light-info">In Progress</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 8:43 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">
																	<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 9:23 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">
																	<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2022, 11:30 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
																	<span class="badge badge-light-succees me-1">In Transit</span>to
																	<span class="badge badge-light-success">Approved</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 11:30 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">
																	<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#SDK-45670</a></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 5:30 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
																	<span class="badge badge-light-info me-1">In Progress</span>to
																	<span class="badge badge-light-primary">In Transit</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 6:05 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																	<span class="badge badge-light-danger">Declined</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 8:43 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
																	<span class="badge badge-light-info me-1">In Progress</span>to
																	<span class="badge badge-light-primary">In Transit</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 11:05 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">Invoice
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																	<span class="badge badge-light-danger">Declined</span></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 10:10 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Event=-->
																	<td class="min-w-400px">
																	<a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
																	<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
																	<!--end::Event=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2022, 5:20 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
										</div>
										<!--end:::Tab content-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
								<!--begin::Modals-->
								<!--begin::Modal - Update user details-->
						


						
													
								<?php

//$sql="SELECT * from books INNER JOIN authors ON books.authorid = authors.authorid INNER JOIN category ON category.categoryid = books.categoryid  ";

  $sql="SELECT * FROM user ";
  $query=$dbh->prepare($sql);
  
  $query->execute();
  $results=$query->fetchALL(PDO::FETCH_OBJ);

  $cnt=1;
  if ($query->rowCount()>0) {
    # code...
    foreach ($results as $result) 
    {
      # code...

  


  ?>
	 
											<div class="modal fade" value="<?php echo htmlentities($result->id)?>" id="kt_modal_edit_user1<?php echo htmlentities($result->id)?>" tabindex="-1" aria-hidden="true">
												<!--begin::Modal dialog-->
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<!--begin::Modal content-->
													<div class="modal-content">
														<!--begin::Modal header-->
														<div class="modal-header" id="kt_modal_edit_user_header">
															<!--begin::Modal title-->
															<h2 class="fw-bolder">Edit User</h2>
															<!--end::Modal title-->
															<!--begin::Close data-kt-users-modal-action=-->
															<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-editusers-modal-action="close">
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
														<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
															<!--begin::Form	<form id="kt_modal_edit_user_form" class="form" action="#">
-->
															<form id="kt_modal_edit_user_form<?php echo htmlentities(($result->id))?>" enctype="multipart/form-data" class="form" action="#">
																<!--begin::Scroll-->
																<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_edit_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_user_header" data-kt-scroll-wrappers="#kt_modal_edit_user_scroll" data-kt-scroll-offset="300px">
																			
																								<!--begin::Input group-->
																<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="d-block fw-bold fs-6 mb-5">Avatar</label>
																		<!--end::Label-->
																		<!--begin::Image input-->
																		<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: ('<?php echo "../files/user/".($result->uid)."/profile/".($result->image).""?> .')">
																			<!--begin::Preview existing avatar-->
																			
																			<div class="image-input-wrapper w-125px h-125px" style="background-image: url('<?php echo "../files/user/".($result->uid)."/profile/".($result->image).""?> .')"></div>	


																			<!--end::Preview existing avatar-->
																			<!--begin::Label-->
																			<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																				<i class="bi bi-pencil-fill fs-7"></i>
																				<!--begin::Inputs-->
																				<input type="file" name="avatar1" accept=".png, .jpg, .jpeg" />
																				<input type="hidden" name="avatar_remove" />
																				<!--end::Inputs-->
																			</label>
																			<!--end::Label-->
																			<!--begin::Cancel-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																				<i class="bi bi-x fs-2"></i>
																			</span>
																			<!--end::Cancel-->
																			<!--begin::Remove-->
		
																			<!--end::Remove-->
																		</div>
																		<!--end::Image input-->
																		<!--begin::Hint-->
																		<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
																		<!--end::Hint-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-2">First Name</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" name="fname1"  value="<?php echo htmlentities(($result->fname))?>" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name"  />
																		<!--end::Input-->
																	</div>
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-2">Last Name</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" hidden  name="id1" value="<?php echo htmlentities(($result->id))?>" />
																		<input  type="text" name="u1" hidden value="<?php echo htmlentities(($result->username))?>" />
																		
																		<input  type="text" name="e1" hidden value="<?php echo htmlentities(($result->email))?>" />


																		<input type="text" name="lname1" value="<?php echo htmlentities(($result->lname))?>"class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name" />
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-2">Email</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="email" name="email1"  value="<?php echo htmlentities(($result->email))?>" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com"  />
																		<!--end::Input-->
																	</div>
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-2">Username</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" name="username1" value="<?php echo htmlentities(($result->username))?>"class="form-control form-control-solid mb-3 mb-lg-0" placeholder="username"  />
																		<!--end::Input-->
																	</div>
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-2">New Password</label>
																		<!--end::Label-->
																		<!--begin::Input-->

																		<input type="password" name="password1" value="<?php echo htmlentities(($result->password))?>"class="form-control form-control-solid mb-3 mb-lg-0" placeholder="********"  />
																		<!--end::Input-->
																	</div>
								
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-7">
																		<!--begin::Label-->
																		<label class="required fw-bold fs-6 mb-5">Role</label>
																		<!--end::Label-->
																		<!--begin::Roles-->
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div class="form-check form-check-custom form-check-solid">
																		<?php
																		if(($result->role)=='user'){
																		?>
																		<input class="form-check-input me-3" name="role1" type="radio" value="user" checked />


																		
																				<!--begin::Input-->
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label" for="kt_modal_update_role_option_01">
																					<div class="fw-bolder text-gray-800">User</div>
																					<div class="text-gray-600">For User privilleges</div>
																				</label>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'></div>
																		<!--begin::Input row-->
																		<div class="d-flex fv-row">
																			<!--begin::Radio-->
																			<div class="form-check form-check-custom form-check-solid">
																				<!--begin::Input-->

																				<input class="form-check-input me-3" name="role1" type="radio" value="admin" />


														
																				<!--end::Input-->
																				<!--begin::Label-->
																				<label class="form-check-label" for="kt_modal_update_role_option_1">
																					<div class="fw-bolder text-gray-800">Admin</div>
																					<div class="text-gray-600">For Admin privilleges</div>
																				</label>
																				<?php }
																				
																				else {
																					
																					
																					?>
																								<input class="form-check-input me-3" name="role1" type="radio" value="user"  />


																		
																							<!--begin::Input-->
																							<!--end::Input-->
																							<!--begin::Label-->
																							<label class="form-check-label" for="kt_modal_update_role_option_01">
																								<div class="fw-bolder text-gray-800">User</div>
																								<div class="text-gray-600">For User privilleges</div>
																							</label>
																							<!--end::Label-->
																							</div>
																							<!--end::Radio-->
																							</div>
																							<!--end::Input row-->
																							<div class='separator separator-dashed my-5'></div>
																							<!--begin::Input row-->
																							<div class="d-flex fv-row">
																							<!--begin::Radio-->
																							<div class="form-check form-check-custom form-check-solid">
																							<!--begin::Input-->

																							<input class="form-check-input me-3" name="role1" type="radio" value="admin" checked />







																							<!--end::Input-->
																							<!--begin::Label-->
																							<label class="form-check-label" for="kt_modal_update_role_option_1">
																								<div class="fw-bolder text-gray-800">Admin</div>
																								<div class="text-gray-600">For Admin privilleges</div>
																							</label>

																				
																				<?php }
																				?>
																				<!--end::Label-->
																			</div>
																			<!--end::Radio-->
																		</div>
																		<!--end::Input row-->
																		<div class='separator separator-dashed my-5'></div>
																		<!--begin::Input row-->
																	
																		
																		
																		<!--end::Input row-->
																		<!--end::Roles-->
															</div>

														


																	<!--end::Input group-->
																</div>
																<!--end::Scroll-->
																<!--begin::Actions-->
																<div class="text-center pt-15">
																	<button type="reset" class="btn btn-light me-3" data-kt-editusers-modal-action="cancel">Discard</button>
																	<button type="submit"  class="btn btn-primary"  data-kt-editusers-modal-action="submit">
																		<span class="indicator-label">Submit</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Modal body-->
													</div>
													<!--end::Modal content-->
												</div>
												<!--end::Modal dialog-->
											</div>


											<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
?>
	

			










								<!--end::Modal - Update user details-->
								<!--begin::Modal - Add schedule-->
								<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Add an Event</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_add_schedule_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Event Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="event_name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Date &amp; Time</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date &amp; time."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="Pick date &amp; time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Event Organiser</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="event_org" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Send Event Details To</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add schedule-->
								<!--begin::Modal - Add task-->
								<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Add a Task</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_add_task_form" class="form" action="#">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fs-6 fw-bold form-label mb-2">Task Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="task_name" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Task Due Date</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">Task Description</label>
														<!--end::Label-->
														<!--begin::Input-->
														<textarea class="form-control form-control-solid rounded-3"></textarea>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add task-->
								<!--begin::Modal - Update email-->
								<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update Email Address</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_update_email_form" class="form" action="#">
													<!--begin::Notice-->
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
														<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-bold">
																<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--end::Notice-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Email Address</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Update email-->
								<!--begin::Modal - Update password-->
								<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update Password</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_update_password_form" class="form" action="#">
													<!--begin::Input group=-->
													<div class="fv-row mb-10">
														<label class="required form-label fs-6 mb-2">Current Password</label>
														<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
													</div>
													<!--end::Input group=-->
													<!--begin::Input group-->
													<div class="mb-10 fv-row" data-kt-password-meter="true">
														<!--begin::Wrapper-->
														<div class="mb-1">
															<!--begin::Label-->
															<label class="form-label fw-bold fs-6 mb-2">New Password</label>
															<!--end::Label-->
															<!--begin::Input wrapper-->
															<div class="position-relative mb-3">
																<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
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
														<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
														<!--end::Hint-->
													</div>
													<!--end::Input group=-->
													<!--begin::Input group=-->
													<div class="fv-row mb-10">
														<label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
														<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
													</div>
													<!--end::Input group=-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Update password-->
								<!--begin::Modal - Update role-->
								<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update User Role</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_update_role_form" class="form" action="#">
													<!--begin::Notice-->
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
														<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-bold">
																<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--end::Notice-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-5">
															<span class="required">Select a user role</span>
														</label>
														<!--end::Label-->
														<!--begin::Input row-->
														<div class="d-flex">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_0">
																	<div class="fw-bolder text-gray-800">Administrator</div>
																	<div class="text-gray-600">Best for business owners and company administrators</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_1">
																	<div class="fw-bolder text-gray-800">Developer</div>
																	<div class="text-gray-600">Best for developers or people primarily using the API</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_2">
																	<div class="fw-bolder text-gray-800">Analyst</div>
																	<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_3">
																	<div class="fw-bolder text-gray-800">Support</div>
																	<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_4">
																	<div class="fw-bolder text-gray-800">Trial</div>
																	<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Update role-->
								<!--begin::Modal - Add task-->
								<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Add Authenticator App</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Content-->
												<div class="fw-bolder d-flex flex-column justify-content-center mb-5">
													<!--begin::Label-->
													<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
													<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
													<!--end::Label-->
													<!--begin::QR code-->
													<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
														<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
													</div>
													<!--end::QR code-->
													<!--begin::Text code-->
													<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
														<div class="fs-1">gi2kdnb54is709j</div>
													</div>
													<!--end::Text code-->
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<div class="d-flex flex-center">
													<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
													<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add task-->
								<!--begin::Modal - Add task-->
								<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Enable One Time Password</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
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
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form class="form" id="kt_modal_add_one_time_password_form">
													<!--begin::Label-->
													<div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
													<!--end::Label-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Mobile number</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Separator-->
													<div class="separator saperator-dashed my-5"></div>
													<!--end::Separator-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Email</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Confirm password</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add task-->
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>















						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2022©</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Overflow</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->
		<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
			<div class="card shadow-none rounded-0">
				<!--begin::Header-->
				<div class="card-header" id="kt_activities_header">
					<h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body position-relative" id="kt_activities_body">
					<!--begin::Content-->
					<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
						<!--begin::Timeline items-->
						<div class="timeline">
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
											<!--begin::Title-->
											<a href="../../Overflow/views/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px pe-2">
												<span class="badge badge-light text-muted">Application Design</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-2.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-14.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px pe-2">
												<span class="badge badge-light-primary">In Progress</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../Overflow/views/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
										<!--begin::Record-->
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
											<!--begin::Title-->
											<a href="../../Overflow/views/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
											<!--end::Title-->
											<!--begin::Label-->
											<div class="min-w-175px">
												<span class="badge badge-light text-muted">CRM System Development</span>
											</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<img src="assets/media/avatars/300-20.jpg" alt="img" />
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="symbol symbol-circle symbol-25px">
													<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
											<!--begin::Progress-->
											<div class="min-w-125px">
												<span class="badge badge-light-success">Completed</span>
											</div>
											<!--end::Progress-->
											<!--begin::Action-->
											<a href="../../Overflow/views/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
											<!--end::Action-->
										</div>
										<!--end::Record-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
												<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n2">
									<!--begin::Timeline heading-->
									<div class="overflow-auto pe-3">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
												<img src="assets/media/avatars/300-1.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
												<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="mb-5 pe-3">
										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
												<img src="assets/media/avatars/300-23.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="../../Overflow/views/apps/projects/project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">1.9mb</div>
													<!--end::Number-->
												</div>
												<!--begin::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
												<!--begin::Icon-->
												<img alt="../../Overflow/views/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">18kb</div>
													<!--end::Number-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-aligns-center">
												<!--begin::Icon-->
												<img alt="../../Overflow/views/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-1 fw-bold">
													<!--begin::Desc-->
													<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
													<!--end::Desc-->
													<!--begin::Number-->
													<div class="text-gray-400">20mb</div>
													<!--end::Number-->
												</div>
												<!--end::Icon-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">Task
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay me-10">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="overlay">
												<!--begin::Image-->
												<div class="overlay-wrapper">
													<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
												</div>
												<!--end::Image-->
												<!--begin::Link-->
												<div class="overlay-layer bg-dark bg-opacity-10 rounded">
													<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
												</div>
												<!--end::Link-->
											</div>
											<!--end::Item-->
										</div>
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
												<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">New case
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="overflow-auto pb-5">
											<!--begin::Wrapper-->
											<div class="d-flex align-items-center mt-1 fs-6">
												<!--begin::Info-->
												<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
												<!--end::Info-->
												<!--begin::User-->
												<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
												<!--end::User-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mb-10 mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">You have received a new order:</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
												<img src="assets/media/avatars/300-4.jpg" alt="img" />
											</div>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
									<!--begin::Timeline details-->
									<div class="overflow-auto pb-5">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
													<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-bold">
													<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!</h4>
													<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Timeline details-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
							<!--begin::Timeline item-->
							<div class="timeline-item">
								<!--begin::Timeline line-->
								<div class="timeline-line w-40px"></div>
								<!--end::Timeline line-->
								<!--begin::Timeline icon-->
								<div class="timeline-icon symbol symbol-circle symbol-40px">
									<div class="symbol-label bg-light">
										<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
												<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
												<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Timeline icon-->
								<!--begin::Timeline content-->
								<div class="timeline-content mt-n1">
									<!--begin::Timeline heading-->
									<div class="pe-3 mb-5">
										<!--begin::Title-->
										<div class="fs-5 fw-bold mb-2">New order
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
											<!--end::User-->
										</div>
										<!--end::Description-->
									</div>
									<!--end::Timeline heading-->
								</div>
								<!--end::Timeline content-->
							</div>
							<!--end::Timeline item-->
						</div>
						<!--end::Timeline items-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="card-footer py-5 text-center" id="kt_activities_footer">
					<a href="../../Overflow/views/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--></a>
				</div>
				<!--end::Footer-->
			</div>
		</div>
		<!--end::Activities drawer-->
		
		<!--begin::Chat drawer-->

		<!--end::Chat drawer-->
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Engage drawers-->
		<!--begin::Demos drawer-->
	
		<!--end::Demos drawer-->
		<!--begin::Help drawer-->

		<!--end::Help drawer-->
		<!--end::Engage drawers-->
		<!--begin::Engage toolbar-->

		<!--end::Engage toolbar-->
		<!--begin::Scrolltop-->
		
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
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
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-bold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
													<div class="fw-bold opacity-50">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
													<div class="fw-bold opacity-50">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
													<div class="fw-bold opacity-50">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
													<div class="fw-bold opacity-50">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-primary">Contact Us</a>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-bold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-bold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Upgrade Plan</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
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
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
								<!--begin::Nav-->
								<div class="stepper-nav ps-lg-10">
									<!--begin::Step 1-->
									<div class="stepper-item current" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Details</h3>
											<div class="stepper-desc">Name your App</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--begin::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Frameworks</h3>
											<div class="stepper-desc">Define your app framework</div>
										</div>
										<!--begin::Label-->
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Database</h3>
											<div class="stepper-desc">Select the app database type</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">4</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Billing</h3>
											<div class="stepper-desc">Provide payment details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Line-->
										<div class="stepper-line w-40px"></div>
										<!--end::Line-->
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">5</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Completed</h3>
											<div class="stepper-desc">Review and Submit</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Step 5-->
								</div>
								<!--end::Nav-->
							</div>
							<!--begin::Aside-->
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-2">
													<span class="required">App Name</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Category</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Select Framework</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-5 fw-bold mb-2">Database Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-bold mb-4">
													<span class="required">Select Database Engine</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Name On Card</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
													</div>
													<!--end::Card logos-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Col-->
												<div class="col-md-8 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																<option></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																<option></option>
																<option value="2022">2022</option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
																<option value="2026">2026</option>
																<option value="2027">2027</option>
																<option value="2028">2028</option>
																<option value="2029">2029</option>
																<option value="2030">2030</option>
																<option value="2031">2031</option>
																<option value="2032">2032</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
														<span class="required">CVV</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
													</label>
													<!--end::Label-->
													<!--begin::Input wrapper-->
													<div class="position-relative">
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
														<!--end::Input-->
														<!--begin::CVV icon-->
														<div class="position-absolute translate-middle-y top-50 end-0 me-3">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
															<span class="svg-icon svg-icon-2hx">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M22 7H2V11H22V7Z" fill="currentColor" />
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::CVV icon-->
													</div>
													<!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Save Card</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div data-kt-stepper-element="content">
										<div class="w-100 text-center">
											<!--begin::Heading-->
											<h1 class="fw-bolder text-dark mb-3">Release!</h1>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
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
					<!--begin::Modal header-->

					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Users Search-->
		
		<!--end::Modal - Users Search-->
		<!--end::Modals-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>





		<script>
"use strict";

// Class definition


$('.edit_data').click(function(){

	//const fname=$(this).data("fname1");

				//	alert (fname);
    // Shared variables
//$('.edit_data').click(function(){

//const userid = $(this).attr("id");  
//alert(userid);

//const g = document.getElementsByName('edit');

//let num = document.getElementsByName("animal")

	//let id=	document.getElementById("kt_modal_edit_user1",217);
//	const userid = $(this).attr("id"); 
//	alert(userid);
	


//	const currentId = $('.modal fade').attr('id');
	
//const currentId = $('.modal fade').attr('id');
//	alert(currentId);
	//const id = document.getElementById('kt_modal_edit_user1');
	const userid = $(this).attr("id");  
    const element = document.getElementById('kt_modal_edit_user1'+userid);
    const form = element.querySelector('#kt_modal_edit_user_form'+userid);
    const modal = new bootstrap.Modal(element);
//});


    // Init add schedule modal
   


        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
			
            form,
            {
                fields: {
                    'username1': {
						verbose:false,
                        validators: {
                            notEmpty: {
                                message: 'Username is required!'
                            },
							stringLength: {
								min: 3,
								max: 20,
								message: 'The username must be more than 3 and less than 20 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'The username can only consist of alphabetical, number, dot and underscore'
								},
							remote: {
								message: 'The username is already taken!',
								url: '_crud.php',
								data: function () {
                                return {
                                    username1: form.querySelector('[name="username1"]').value,
									u1: form.querySelector('[name="u1"]').value,
									action: 'usernameusercheck',

                                };
                            },
								type: 'GET'
							},
                        }
                    },
				'avatar1': {
                validators: {
                   
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                      //  maxSize: 2000000,   
                        message: 'The selected file is not valid'
                    },
					file: {
                      
                        maxSize: 2000000,   // 2mb
                        message: 'Image is too large'
                    }
                }
            },
        

					///[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/
					//fname /^(?=.{2,20}$)[a-z]+(?:['_.\s][a-z]+)*$/i
                    'email1': {
                        validators: {
                            notEmpty: {
                                message: 'Email address is required!'
                            },
							regexp: {
								regexp: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
								message: 'The value is not a valid email address!'
							},
							remote: {
								message: 'The email is already taken!',
								url: '_crud.php',
								data: function () {
                                return {
                                    email1: form.querySelector('[name="email1"]').value,
									e1: form.querySelector('[name="e1"]').value,
									action: 'emailusercheck',

                                };
                            },
								type: 'GET'
							},
                        }
                    },
					'fname1': {
                        validators: {
                            notEmpty: {
                                message: 'First Name is required!'
                            },
							regexp: {
								regexp: /^(?=.{2,20}$)[a-z]+(?:['_.\s][a-z]+)*$/i,
								message: 'First Name must be atleast 2-20 letters only!'
							},
						
                        }
                    },
					'lname1': {
                        validators: {
                            notEmpty: {
                                message: 'Last Name is required!'
                            },
							regexp: {
								regexp: /^(?=.{2,20}$)[a-z]+(?:['_.\s][a-z]+)*$/i,
								message: 'Last name must be atleast 3-20 letters only!'
							},
						
                        }
                    },
					'password1': {
                        validators: {
                            notEmpty: {
                                message: 'Password is required!'
                            },
							regexp: {
								regexp: /^(?=(.*[a-z]){1,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){1,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$/,
								message: 'Use 8 or more characters with a mix of letters, numbers & symbols!'
							},
						
						
                        }
                    },
				    'cpassword1': {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Password does not match!'
                            }
                        }
                    },
				
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-editusers-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                  

                    if (status == 'Valid') {
						console.log('Valid inputs!');
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click 
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;



							var form=$('#kt_modal_edit_user_form'+userid)[0];
							var formdata=new FormData(form);
							formdata.append('action', 'edituser');

							var id1 = userid;

							$.ajax({
								type: 'POST',
								url: '_crud.php',
								data: formdata,
								enctype: 'multipart/form-data',
								contentType:false,
								processData:false,
								cache: false,
                    			//timeout: 800000,
								success: function () {
								//alert('form was submitted');
							

								Swal.fire({
                                text: "Successfully updated!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
									}).then(function (result) {
										if (result.isConfirmed) {
											form.reset(); // Reset form	
											modal.hide();
											window.location.href = 'users';

									
								
										}
									});


								}
								
							});
                            // Show popup confirmation 
                          

                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
						console.log('Invalid inputs!');
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
            }
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-editusers-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
			//	form.reset();
			//	window.location.href = 'users';
                if (result.value) {
                    form.reset(); // Reset form	
					modal.hide();
					window.location.href = 'users';
					console.log('Cancelled!');
					
				
                } else if (result.dismiss === 'cancel') {
					console.log('Not cancelled!');
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-editusers-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form	
					modal.hide();	
					window.location.href = window.location.href;	
                  	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    



	//

//});
   

});

// On document ready
	</script>







	</body>
	<!--end::Body-->
</html>