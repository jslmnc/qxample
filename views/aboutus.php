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
		<title>About Us</title>
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
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 active"  href="aboutus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About Us</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="ourteam" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Our Team</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
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
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="aboutus">About Us</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="ourteam">Our Team</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="pricing">Pricing</a>
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
									<!--begin::Body-->
									<div class="card-body p-lg-17">
										<!--begin::About-->
										<div class="mb-18">
											<!--begin::Wrapper-->
											<div class="mb-10">
												<!--begin::Top-->
												<div class="text-center mb-15">
													<!--begin::Title-->
													<h3 class="fs-2hx text-dark mb-5">About Us</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="fs-5 text-muted fw-bold">Within the last 10 years, we have sold over 100,000 admin theme copies that have been
													<br />successfully deployed by small businesses to global enterprises</div>
													<!--end::Text-->
												</div>
												<!--end::Top-->
												<!--begin::Overlay-->
												<div class="overlay">
													<!--begin::Image-->
													<img class="w-100 card-rounded" src="assets/media/stock/1600x800/img-1.jpg" alt="" />
													<!--end::Image-->
													<!--begin::Links-->
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
														<a href="pricing" class="btn btn-primary">Pricing</a>
														<a href="" class="btn btn-light-primary ms-3">Join Us</a>
													</div>
													<!--end::Links-->
												</div>
												<!--end::Container-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Description-->
											<div class="fs-5 fw-bold text-gray-600">
												<!--begin::Text-->
												<p class="mb-8">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
												<a href="../../demo1/dist/pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.</p>
												<!--end::Text-->
												<!--begin::Text-->
												<p class="mb-8">There’s an old maxim that states,
												<span class="text-gray-800 pe-1">“No fun for the writer, no fun for the reader.”</span>No matter what industry you’re working in, as a blogger, you should live and die by this statement.</p>
												<!--end::Text-->
												<!--begin::Text-->
												<p class="mb-8">Before you do any of the following steps, be sure to pick a topic that actually interests you. Nothing – and
												<a href="../../demo1/dist/pages/blog/home.html" class="link-primary pe-1">I mean NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from the writer. You can tell when a writer is bored by their subject, and it’s so cringe-worthy it’s a little embarrassing.</p>
												<!--end::Text-->
												<!--begin::Text-->
												<p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a cardboard box manufacturing company.” I feel your pain, I really do. During the course of my career, I’ve written content for dozens of clients in some less-than-thrilling industries (such as financial regulatory compliance and corporate housing), but the hallmark of a professional blogger is the ability to write well about any topic, no matter how dry it may be. Blogging is a lot easier, however, if you can muster at least a little enthusiasm for the topic at hand.</p>
												<!--end::Text-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::About-->
										<!--begin::Statistics-->
										<div class="card bg-light mb-18">
											<!--begin::Body-->
											<div class="card-body py-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex">
													<!--begin::Items-->
													<div class="d-flex justify-content-between mb-10 mx-auto w-xl-900px">
														<!--begin::Item-->
														<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
															<!--begin::Content-->
															<div class="text-center">
																<!--begin::Symbol-->
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2tx svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="mt-1">
																	<!--begin::Animation-->
																	<div class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
																	<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+</div>
																	<!--end::Animation-->
																	<!--begin::Label-->
																	<span class="text-gray-600 fw-bold fs-5 lh-0">Businesses</span>
																	<!--end::Label-->
																</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
															<!--begin::Content-->
															<div class="text-center">
																<!--begin::Symbol-->
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
																<span class="svg-icon svg-icon-2tx svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor" />
																		<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor" />
																		<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="mt-1">
																	<!--begin::Animation-->
																	<div class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
																	<div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+</div>
																	<!--end::Animation-->
																	<!--begin::Label-->
																	<span class="text-gray-600 fw-bold fs-5 lh-0">Quick Reports</span>
																	<!--end::Label-->
																</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
															<!--begin::Content-->
															<div class="text-center">
																<!--begin::Symbol-->
																<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																<span class="svg-icon svg-icon-2tx svg-icon-info">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
																		<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
																		<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="mt-1">
																	<!--begin::Animation-->
																	<div class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
																	<div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+</div>
																	<!--end::Animation-->
																	<!--begin::Label-->
																	<span class="text-gray-600 fw-bold fs-5 lh-0">Payments</span>
																	<!--end::Label-->
																</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Testimonial-->
												<div class="fs-2 fw-bold text-muted text-center mb-3">
												<span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about it in a
												<br />
												<span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
												<span class="fs-1 lh-1 text-gray-700">“</span></div>
												<!--end::Testimonial-->
												<!--begin::Author-->
												<div class="fs-2 fw-bold text-muted text-center">
													<a href="../../demo1/dist/account/security.html" class="link-primary fs-4 fw-bolder">Marcus Levy</a>
													<span class="fs-4 fw-bolder text-gray-600">,KeenThemes CEO</span>
												</div>
												<!--end::Author-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Statistics-->
										<!--begin::Section-->
								
										<!--end::Section-->
										<!--begin::Team-->
										<div class="mb-18">
											<!--begin::Heading-->
											<div class="text-center mb-12">
												<!--begin::Title-->
												<h3 class="fs-2hx text-dark mb-5">Our Great Team</h3>
												<!--end::Title-->
												<!--begin::Sub-title-->
												<div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete, additional costs to
												<br />integrate and test each extra feature creeps up and haunts most of us.</div>
												<!--end::Sub-title=-->
											</div>
											<!--end::Heading-->
											<!--begin::Slider-->
											<div class="tns tns-default mb-10">
												<!--begin::Wrapper-->
												<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
													<!--begin::Item-->

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
													<div class="text-center">
														<!--begin::Photo-->
														<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('<?php echo "../files/user/".($result->uid)."/profile/".($result->image).""?> .')"></div>
														<!--end::Photo-->
														<!--begin::Person-->
														<div class="mb-0">
															<!--begin::Name-->
															<a href="#" class="text-dark fw-bolder text-hover-primary fs-3"><?php echo htmlentities(ucfirst($result->fname))." ".(ucfirst($result->lname))?></a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="text-muted fs-6 fw-bold mt-1"><?php echo htmlentities(ucfirst($result->role))?></div>
															<!--begin::Position-->
														</div>
														<!--end::Person-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
												
													<!--end::Item-->
													<!--begin::Item-->
													
													<!--begin::Item-->
												
													<!--end::Item-->
													<!--begin::Item-->
												
													<!--end::Item-->
													<!--begin::Item-->
													
													<!--end::Item-->
													<!--begin::Item-->
													<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
?>

													<!--end::Item-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Button-->
												<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
													<span class="svg-icon svg-icon-3x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
													<span class="svg-icon svg-icon-3x">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Button-->
											</div>
											<!--end::Slider-->
										</div>
										<!--end::Team-->
										<!--begin::Card-->
										<div class="card mb-4 bg-light text-center">
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
		<!--end::Javascript-->

		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/apps/support-center/tickets/create.js"></script>
		<script src="assets/js/custom/documentation/documentation.js"></script>
		<script src="assets/js/custom/pages/general/contact.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/authentication/sign-up/general.js"></script>
		<script src="assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>






	



	</body>
	<!--end::Body-->
</html>