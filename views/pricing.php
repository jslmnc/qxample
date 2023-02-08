<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


//$_SESSION[''];
//if (!isset($_SESSION['email'])){
//	header('location:sign-in');
//}




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
		<title>Pricing</title>
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
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="index" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 "  href="aboutus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About Us</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="ourteam" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Our Team</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 active" href="pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="faq" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">FAQ</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="licenses" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Licenses</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4  px-xxl-6" href="contactus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact US</a>
												<!--end::Menu link-->
											</div>
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
								<div class="card mb-12">
									<!--begin::Hero body-->
									<div class="card-body flex-column p-5">
										<!--begin::Hero content-->
										<div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
												<!--begin::Title-->
												<h1 class="fw-bolder fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
												<!--end::Title-->
												<!--begin::Input group-->
												<div class="position-relative w-100">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question" />
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Wrapper-->
											<div class="flex-equal d-flex justify-content-center align-items-end ms-5">
												<!--begin::Illustration-->
												<img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
												<!--end::Illustration-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Hero content-->
										<!--begin::Hero nav-->
										<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
											<!--begin::Nav-->
											<ul class="nav flex-wrap border-transparent fw-bolder">
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase " href="aboutus">About Us</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase " href="ourteam">Our Team</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="pricing">Pricing</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="faq">FAQ</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="licenses">Licenses</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="contactus">Contact US</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
											<!--begin::Action-->
											<!--end::Action-->
										</div>
										<!--end::Hero nav-->
									</div>
									<!--end::Hero body-->
								</div>
								<!--end::Hero card-->
								<!--begin::Contact-->


								<div class="card">
									<!--begin::Card body-->
									<div class="card-body px-10 px-lg-20 pt-17 pb-10">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-striped gy-7">
												<!--begin::Table head-->
												<thead class="align-middle">
													<tr id="kt_pricing">
														<th>
															<!--begin::Nav group-->
															<div class="nav bg-light rounded-pill px-3 py-2 ms-9 mb-15" data-kt-buttons="true" style="width: 222px">
																<!--begin::Nav link-->
																<button class="nav-link active btn btn-active btn-active-dark fw-bolder btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button>
																<!--end::Nav link-->
																<!--begin::Nav link-->
																<button class="nav-link btn btn-active btn-active-dark fw-bolder btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button>
																<!--end::Nav link-->
															</div>
															<!--end::Nav group-->
														</th>
														<th class="text-center min-w-200px">
															<div class="min-w-200px mb-15">
																<div class="text-primary fs-3 fw-bolder mb-7">Free</div>
																<div class="fs-5x fw-bold d-flex justify-content-center align-items-start lh-sm">
																<span class="align-self-start fs-2 mt-3">$</span>0</div>
																<div class="text-muted fw-bolder mb-7">Monthly</div>
																<a href="#" class="btn btn-light-primary fw-bolder mx-auto">Start</a>
															</div>
														</th>
														<th class="text-center min-w-200px">
															<div class="min-w-200px bg-primary card-rounded py-12 mb-15">
																<div class="text-white fs-3 fw-bolder mb-7">Pro</div>
																<div class="fs-5x text-white d-flex justify-content-center align-items-start">
																	<span class="fs-2 mt-3">$</span>
																	<span class="lh-sm fw-bold" data-kt-plan-price-month="99" data-kt-plan-price-annual="399">99</span>
																</div>
																<div class="text-white fw-bolder mb-7">Monthly</div>
																<a href="#" class="btn bg-white bg-opacity-20 bg-hover-white text-hover-primary text-white fw-bolder mx-auto">Start</a>
															</div>
														</th>
														<th class="text-center min-w-200px">
															<div class="min-w-200px mb-15">
																<div class="text-primary fs-3 fw-bolder mb-7">Lifetime</div>
																<div class="fs-5x d-flex justify-content-center align-items-start">
																	<span class="fs-2 mt-3">$</span>
																	<span class="lh-sm fw-bold" data-kt-plan-price-month="199" data-kt-plan-price-annual="999">199</span>
																</div>
																<div class="text-muted fw-bolder mb-7">Monthly</div>
																<a href="#" class="btn btn-light-primary fw-bolder mx-auto">Select</a>
															</div>
														</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">Sublicense Visuals</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">Free Updates</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">Theme Support</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-0">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">Unlimited Websites</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">DDOS Protection</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
													<tr>
														<th class="card-rounded-start">
															<div class="fw-bolder d-flex align-items-center ps-9 fs-3">Domain Reseller</div>
														</th>
														<td>
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td>
															<div class="px-7 flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
														<td class="card-rounded-end">
															<div class="flex-root d-flex justify-content-center">
																<span class="h-40px w-40px d-flex flex-center d-block">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
																<span class="h-40px w-40px d-flex flex-center d-none">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
																	<span class="svg-icon svg-icon-2x svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
																			<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end::Card body-->
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