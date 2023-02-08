<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();

if (!isset($_SESSION['user'])) {
	header('location:error-500');
	
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
		<title>Dashboard</title>
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
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../Overflow/views/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">My Dashboard</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Dashboard</li>
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
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-xl-10">
									<!--begin::Col-->
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 16-->
										<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10" style="background-color: #080655;background-image:url('assets/media/svg/shapes/wave-bg-dark.svg')">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">69</span>
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span class="text-white opacity-50 pt-1 fw-bold fs-6">Notes</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end pt-0">
												<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
													<div class="d-flex justify-content-between fw-bolder fs-6 text-white opacity-50 w-100 mt-auto mb-2">
														<span>Storage</span>
														<span>72%</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-danger rounded">
														<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<div class="card-body d-flex align-items-end pt-0">
												<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
													<div class="d-flex justify-content-between fw-bolder fs-6 text-white opacity-50 w-100 mt-auto mb-2">
														<span>Notes</span>
														<span>72%</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-danger rounded">
														<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 16-->
										<!--begin::Card widget 7-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">357</span>
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Professionals</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column justify-content-end pe-0">
												<!--begin::Title-->
												<span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
												<!--end::Title-->
												<!--begin::Users group-->
												<div class="symbol-group symbol-hover flex-nowrap">
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
														<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
													</div>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
														<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
													</div>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
														<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
													</div>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
														<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
													</div>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
														<span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
													</div>
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
														<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
													</div>
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+42</span>
													</a>
												</div>
												<!--end::Users group-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 7-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 4-->
										<div class="card card-flush h-md-50 mb-5 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Currency-->
														<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
														<!--end::Currency-->
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">69,700</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->2.2%</span>
														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Projects Earnings in April</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body pt-2 pb-4 d-flex align-items-center">
												<!--begin::Chart-->
												<div class="d-flex flex-center me-5 pt-2">
													<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
												</div>
												<!--end::Chart-->
												<!--begin::Labels-->
												<div class="d-flex flex-column content-justify-center w-100">
													<!--begin::Label-->
													<div class="d-flex fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end">$7,660</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fw-bold align-items-center my-3">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end">$2,820</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Others</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end">$45,257</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
												</div>
												<!--end::Labels-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 4-->
										<!--begin::List widget 25-->
										<div class="card card-flush h-lg-50">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title text-gray-800">Highlights</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar d-none">
													<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
													<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
														<!--begin::Display range-->
														<div class="text-gray-600 fw-bolder">Loading date range...</div>
														<!--end::Display range-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
														<span class="svg-icon svg-icon-1 ms-2 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Daterangepicker-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Client Rating</div>
													<!--end::Section-->
													<!--begin::Statistics-->
													<div class="d-flex align-items-senter">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-success me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Number-->
														<span class="text-gray-900 fw-boldest fs-6">7.8</span>
														<!--end::Number-->
														<span class="text-gray-400 fw-bolder fs-6">/10</span>
													</div>
													<!--end::Statistics-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Quotes</div>
													<!--end::Section-->
													<!--begin::Statistics-->
													<div class="d-flex align-items-senter">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
																<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Number-->
														<span class="text-gray-900 fw-boldest fs-6">730</span>
														<!--end::Number-->
													</div>
													<!--end::Statistics-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Section-->
													<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Agent Earnings</div>
													<!--end::Section-->
													<!--begin::Statistics-->
													<div class="d-flex align-items-senter">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-success me-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Number-->
														<span class="text-gray-900 fw-boldest fs-6">$2,309</span>
														<!--end::Number-->
													</div>
													<!--end::Statistics-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::LIst widget 25-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
										<!--begin::Timeline widget 3-->
										<div class="card h-md-100">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">What’s up Today and the next 6 days</span>
													<span class="text-muted mt-1 fw-bold fs-7">Total events</span>
												</h3>
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="calendar" class="btn btn-sm btn-light">View Calendar</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-7 px-0">
												<?php $date = date('Y-m-d'); //today date
													$weekOfdays = array();
													for($i =0; $i <= 7; $i++){
														$weekOfdays[] = date(' Y-m-d', strtotime("+$i day", strtotime($date)));
														$days[] = date('d', strtotime("+$i day", strtotime($date)));

													}
													$days1=$days[0];
													$days2=$days[1];
													$days3=$days[2];
													$days4=$days[3];
													$days5=$days[4];
													$days6=$days[5];
													$days7=$days[6];

													//print_r($weekOfdays);

													 $weekday1 =$weekOfdays[0];
													 $weekday2 =$weekOfdays[1];
													 $weekday3 =$weekOfdays[2];
													 $weekday4 =$weekOfdays[3];
													 $weekday5 =$weekOfdays[4];
													 $weekday6 =$weekOfdays[5];
													 $weekday7 =$weekOfdays[6];


													//echo date('l', strtotime($day)); ?>
												<!--begin::Nav-->
												<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
															<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday1));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days1=$days[0]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday2));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days2=$days[1]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday3));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days3=$days[2]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger " data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday4));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days4=$days[3]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday5));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days5=$days[4]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday6));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days6=$days[5]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
														<span class="fs-7 fw-bold"><?php echo date('l', strtotime($weekday7));?></span>
															<span class="fs-6 fw-bolder"><?php echo $days7=$days[6]; ?></span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
												
													<!--end::Nav item-->
													<!--begin::Nav item-->
													
													<!--end::Nav item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content (ishlamayabdi)-->
												<div class="tab-content mb-2 px-9">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
																<span class="text-gray-400 fw-bold fs-7">PM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Dashboard UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Mark Morris</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Marketing Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Peter Marcus</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
																<span class="text-gray-400 fw-bold fs-7">AM</span></div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">9 Degree Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-bold fs-7">Lead by
																<!--begin::Name-->
																<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Bob</a>
																<!--end::Name--></div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
												<!--begin::Action-->
												<div class="float-end d-none">
													<a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
													<a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Timeline widget 3-->
										<!--begin::Timeline widget 3-->
										<div class="card card-flush d-none h-md-100">
											<!--begin::Card header-->
											<div class="card-header mt-6">
												<!--begin::Card title-->
												<div class="card-title flex-column">
													<h3 class="fw-bolder mb-1">What's on the road?</h3>
													<div class="fs-6 text-gray-400">Total 482 participants</div>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Select-->
													<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
														<option value="1" selected="selected">Options</option>
														<option value="2">Option 1</option>
														<option value="3">Option 2</option>
														<option value="4">Option 3</option>
													</select>
													<!--end::Select-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body p-0">
												<!--begin::Dates-->
												<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0">
															<span class="text-gray-400 fs-7 fw-bold">Fr</span>
															<span class="fs-6 text-gray-800 fw-bolder">20</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1">
															<span class="text-gray-400 fs-7 fw-bold">Sa</span>
															<span class="fs-6 text-gray-800 fw-bolder">21</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2">
															<span class="text-gray-400 fs-7 fw-bold">Su</span>
															<span class="fs-6 text-gray-800 fw-bolder">22</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3">
															<span class="text-gray-400 fs-7 fw-bold">Mo</span>
															<span class="fs-6 text-gray-800 fw-bolder">23</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4">
															<span class="text-gray-400 fs-7 fw-bold">Tu</span>
															<span class="fs-6 text-gray-800 fw-bolder">24</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5">
															<span class="text-gray-400 fs-7 fw-bold">We</span>
															<span class="fs-6 text-gray-800 fw-bolder">25</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6">
															<span class="text-gray-400 fs-7 fw-bold">Th</span>
															<span class="fs-6 text-gray-800 fw-bolder">26</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7">
															<span class="text-gray-400 fs-7 fw-bold">Fr</span>
															<span class="fs-6 text-gray-800 fw-bolder">27</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8">
															<span class="text-gray-400 fs-7 fw-bold">Sa</span>
															<span class="fs-6 text-gray-800 fw-bolder">28</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9">
															<span class="text-gray-400 fs-7 fw-bold">Su</span>
															<span class="fs-6 text-gray-800 fw-bolder">29</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10">
															<span class="text-gray-400 fs-7 fw-bold">Mo</span>
															<span class="fs-6 text-gray-800 fw-bolder">30</span>
														</a>
													</li>
													<!--end::Date-->
													<!--begin::Date-->
													<li class="nav-item me-1">
														<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11">
															<span class="text-gray-400 fs-7 fw-bold">Tu</span>
															<span class="fs-6 text-gray-800 fw-bolder">31</span>
														</a>
													</li>
													<!--end::Date-->
												</ul>
												<!--end::Dates-->
												<!--begin::Tab Content-->
												<div class="tab-content px-9">
													<!--begin::Day-->
													<div id="kt_schedule_day_0" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Terry Robins</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Naomi Hayabusa</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Terry Robins</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_1" class="tab-pane fade show active">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Karina Clarke</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">9:00 - 10:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Sean Bean</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">9:00 - 10:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">David Stevenson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_2" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Michael Walters</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Kendell Trevor</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">9:00 - 10:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Naomi Hayabusa</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_3" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Kendell Trevor</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Kendell Trevor</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">13:00 - 14:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Sean Bean</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_4" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">David Stevenson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Caleb Donaldson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">13:00 - 14:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Karina Clarke</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_5" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Yannis Gloverson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Walter White</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Naomi Hayabusa</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_6" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">13:00 - 14:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Michael Walters</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Mark Randall</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">10:00 - 11:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">David Stevenson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_7" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Yannis Gloverson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Sean Bean</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">14:30 - 15:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Peter Marcus</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_8" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Yannis Gloverson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">10:00 - 11:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Bob Harris</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">11:00 - 11:45
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Mark Randall</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_9" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Terry Robins</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">10:00 - 11:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Walter White</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">14:30 - 15:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Kendell Trevor</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_10" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">14:30 - 15:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Karina Clarke</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">16:30 - 17:30
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Walter White</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Peter Marcus</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
													<!--begin::Day-->
													<div id="kt_schedule_day_11" class="tab-pane fade show">
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Karina Clarke</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">12:00 - 13:00
																<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Terry Robins</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
														<!--begin::Time-->
														<div class="d-flex flex-stack position-relative mt-8">
															<!--begin::Bar-->
															<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
															<!--end::Bar-->
															<!--begin::Info-->
															<div class="fw-bold ms-5 text-gray-600">
																<!--begin::Time-->
																<div class="fs-5">10:00 - 11:00
																<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																<!--end::Time-->
																<!--begin::Title-->
																<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																<!--end::Title-->
																<!--begin::User-->
																<div class="text-gray-400">Lead by
																<a href="#">Yannis Gloverson</a></div>
																<!--end::User-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
															<!--end::Action-->
														</div>
														<!--end::Time-->
													</div>
													<!--end::Day-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Timeline widget-3-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
									<!--begin::Col-->
									<div class="col-xxl-6">
										<!--begin::Card widget 18-->
										<div class="card card-flush border-0 h-md-100">
											<!--begin::Body-->
											<div class="card-body py-9">
												<!--begin::Row-->
												<div class="row gx-9 h-100">
													<!--begin::Col-->
													<div class="col-sm-6 mb-10 mb-sm-0">
														<!--begin::Image-->
														<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-33.jpg');"></div>
														<!--end::Image-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-sm-6">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column h-100">
															<!--begin::Header-->
															<div class="mb-7">
																<!--begin::Headin-->
																<div class="d-flex flex-stack mb-6">
																	<!--begin::Title-->
																	<div class="flex-shrink-0 me-5">
																		<span class="text-gray-400 fs-7 fw-bolder me-2 d-block lh-1 pb-1">Featured</span>
																		<span class="text-gray-800 fs-1 fw-bolder">9 Degree</span>
																	</div>
																	<!--end::Title-->
																	<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
																</div>
																<!--end::Heading-->
																<!--begin::Items-->
																<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center me-5 me-xl-13">
																		<!--begin::Symbol-->
																		<div class="symbol symbol-30px symbol-circle me-3">
																			<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																		</div>
																		<!--end::Symbol-->
																		<!--begin::Info-->
																		<div class="m-0">
																			<span class="fw-bold text-gray-400 d-block fs-8">Manager</span>
																			<span class="fw-bolder text-gray-800 fs-7">Robert Fox</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Symbol-->
																		<div class="symbol symbol-30px symbol-circle me-3">
																			<span class="symbol-label bg-success">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																				<span class="svg-icon svg-icon-5 svg-icon-white">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																						<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																		<!--end::Symbol-->
																		<!--begin::Info-->
																		<div class="m-0">
																			<span class="fw-bold text-gray-400 d-block fs-8">Budget</span>
																			<span class="fw-bolder text-gray-800 fs-7">$64.800</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::Item-->
																</div>
																<!--end::Items-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div class="mb-6">
																<!--begin::Text-->
																<span class="fw-bold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
																<!--end::Text-->
																<!--begin::Stats-->
																<div class="d-flex">
																	<!--begin::Stat-->
																	<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																		<!--begin::Date-->
																		<span class="fs-6 text-gray-700 fw-bolder">Feb 6, 2021</span>
																		<!--end::Date-->
																		<!--begin::Label-->
																		<div class="fw-bold text-gray-400">Due Date</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Stat-->
																	<!--begin::Stat-->
																	<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																		<!--begin::Number-->
																		<span class="fs-6 text-gray-700 fw-bolder">$
																		<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
																		<!--end::Number-->
																		<!--begin::Label-->
																		<div class="fw-bold text-gray-400">Budget</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Stat-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Body-->
															<!--begin::Footer-->
															<div class="d-flex flex-stack mt-auto bd-highlight">
																<!--begin::Users group-->
																<div class="symbol-group symbol-hover flex-nowrap">
																	<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
																		<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
																	</div>
																	<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																		<img alt="Pic" src="assets/media/avatars/300-3.jpg" />
																	</div>
																	<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
																		<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
																	</div>
																</div>
																<!--end::Users group-->
																<!--begin::Actions-->
																<a href="../../demo1/dist/apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-bold">View Project
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																		<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																		<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon--></a>
																<!--end::Actions-->
															</div>
															<!--end::Footer-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card widget 18-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xxl-6">
										<!--begin::Engage widget 8-->
										<div class="card h-md-100" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Row-->
												<div class="row align-items-center h-100">
													<!--begin::Col-->
													<div class="col-7 ps-xl-13">
														<!--begin::Title-->
														<div class="text-white mb-6 pt-6">
															<span class="fs-4 fw-bold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span>
															<span class="fs-2qx fw-bolder">Upgrade Your Plan</span>
														</div>
														<!--end::Title-->
														<!--begin::Text-->
														<span class="fw-bold text-white fs-6 mb-8 d-block opacity-75">Flat cartoony and illustrations with vivid unblended purple hair lady</span>
														<!--end::Text-->
														<!--begin::Items-->
														<div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
															<!--begin::Item-->
															<div class="d-flex align-items-center me-5 me-xl-13">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px symbol-circle me-3">
																	<span class="symbol-label" style="background: #35C7FF">
																		<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-white">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																				<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Info-->
																<div class="text-white">
																	<span class="fw-bold d-block fs-8 opacity-75">Projects</span>
																	<span class="fw-bolder fs-7">Up to 500</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px symbol-circle me-3">
																	<span class="symbol-label" style="background: #35C7FF">
																		<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-white">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																				<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Info-->
																<div class="text-white">
																	<span class="fw-bold opacity-75 d-block fs-8">Tasks</span>
																	<span class="fw-bolder fs-7">Unlimited</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
														<!--begin::Action-->
														<div class="d-flex flex-column flex-sm-row d-grid gap-2">
															<a href="#" class="btn btn-success flex-shrink-0 me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
															<a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-5 pt-10">
														<!--begin::Illustration-->
														<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('assets/media/svg/illustrations/easy/5.svg');"></div>
														<!--end::Illustration-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage widget 8-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::Chart Widget 35-->
										<div class="card card-flush h-md-100">
											<!--begin::Header-->
											<div class="card-header pt-5 mb-6">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<!--begin::Statistics-->
													<div class="d-flex align-items-center mb-2">
														<!--begin::Currency-->
														<span class="fs-3 fw-bold text-gray-400 align-self-start me-1">$</span>
														<!--end::Currency-->
														<!--begin::Value-->
														<span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
														<!--end::Value-->
														<!--begin::Label-->
														<span class="badge badge-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->9.2%</span>
														<!--end::Label-->
													</div>
													<!--end::Statistics-->
													<!--begin::Description-->
													<span class="fs-6 fw-bold text-gray-400">Avg. Agent Earnings</span>
													<!--end::Description-->
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 2-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mb-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Ticket</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Customer</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
															<!--begin::Menu item-->
															<a href="#" class="menu-link px-3">
																<span class="menu-title">New Group</span>
																<span class="menu-arrow"></span>
															</a>
															<!--end::Menu item-->
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mt-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0 px-0">
												<!--begin::Nav-->
												<ul class="nav d-flex justify-content-between mb-3 mx-9">
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content mt-n6">
													<!--begin::Tap pane-->
													<div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
														<!--begin::Chart-->
														<div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
														<!--end::Chart-->
														<!--begin::Table container-->
														<div class="table-responsive mx-9 mt-n6">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="min-w-100px"></th>
																		<th class="min-w-100px text-end pe-0"></th>
																		<th class="text-end min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">2:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-danger">-139.34</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">3:10 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$3,207.03</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-success">+576.24</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">3:55 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$3,274.94</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-success">+124.03</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
														<!--begin::Chart-->
														<div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
														<!--end::Chart-->
														<!--begin::Table container-->
														<div class="table-responsive mx-9 mt-n6">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="min-w-100px"></th>
																		<th class="min-w-100px text-end pe-0"></th>
																		<th class="text-end min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">4:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,345.45</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-success">+134.02</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">11:35 AM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-primary">-124.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">3:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$1,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-danger">+144.04</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
														<!--begin::Chart-->
														<div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
														<!--end::Chart-->
														<!--begin::Table container-->
														<div class="table-responsive mx-9 mt-n6">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="min-w-100px"></th>
																		<th class="min-w-100px text-end pe-0"></th>
																		<th class="text-end min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">3:20 AM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$3,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-primary">+185.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">12:30 AM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-danger">+124.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">4:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-success">-154.03</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
														<!--begin::Chart-->
														<div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
														<!--end::Chart-->
														<!--begin::Table container-->
														<div class="table-responsive mx-9 mt-n6">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="min-w-100px"></th>
																		<th class="min-w-100px text-end pe-0"></th>
																		<th class="text-end min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">2:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-warning">+124.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">5:30 AM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$1,756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-info">+144.65</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">4:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,085.25</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-primary">+154.06</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
														<!--begin::Chart-->
														<div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
														<!--end::Chart-->
														<!--begin::Table container-->
														<div class="table-responsive mx-9 mt-n6">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="min-w-100px"></th>
																		<th class="min-w-100px text-end pe-0"></th>
																		<th class="text-end min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">2:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$2,045.04</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-warning">+114.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">3:30 AM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-primary">-124.03</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 fw-bolder fs-6">10:30 PM</a>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="text-gray-800 fw-bolder fs-6 me-1">$1.756.26</span>
																		</td>
																		<td class="pe-0 text-end">
																			<span class="fw-bolder fs-6 text-info">+165.86</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Chart Widget 33-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Tables widget 14-->
										<div class="card card-flush h-md-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Projects Stats</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Updated 37 minutes ago</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
														<!--begin::Table head-->
														<thead>
															<tr class="fs-7 fw-bolder text-gray-400 border-bottom-0">
																<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
																<th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
																<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
																<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
																<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																<th class="p-0 pb-3 w-50px text-end">VIEW</th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Mivy App</a>
																			<span class="text-gray-400 fw-bold d-block fs-7">Jane Cooper</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-600 fw-bolder fs-6">$32,400</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->9.2%</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																</td>
																<td class="text-end pe-0">
																	<div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																				<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Avionica</a>
																			<span class="text-gray-400 fw-bold d-block fs-7">Esther Howard</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-600 fw-bolder fs-6">$256,910</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="badge badge-danger fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.4%</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
																</td>
																<td class="text-end pe-0">
																	<div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																				<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Charto CRM</a>
																			<span class="text-gray-400 fw-bold d-block fs-7">Jenny Wilson</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-600 fw-bolder fs-6">$8,220</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->9.2%</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																</td>
																<td class="text-end pe-0">
																	<div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																				<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Tower Hill</a>
																			<span class="text-gray-400 fw-bold d-block fs-7">Cody Fisher</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-600 fw-bolder fs-6">$74,000</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="badge badge-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->9.2%</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
																</td>
																<td class="text-end pe-0">
																	<div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																				<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">9 Degree</a>
																			<span class="text-gray-400 fw-bold d-block fs-7">Savannah Nguyen</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-600 fw-bolder fs-6">$183,300</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="badge badge-danger fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.4%</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
																</td>
																<td class="text-end pe-0">
																	<div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																				<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Tables widget 14-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::Engage widget 1-->
										<div class="card h-md-100">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column flex-center">
												<!--begin::Heading-->
												<div class="mb-2">
													<!--begin::Title-->
													<h1 class="fw-bold text-gray-800 text-center lh-lg">Have your tried
													<br />new
													<span class="fw-boldest">Invoice Manager?</span></h1>
													<!--end::Title-->
													<!--begin::Illustration-->
													<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12" style="background-image:url('assets/media/svg/illustrations/easy/2.svg')"></div>
													<!--end::Illustration-->
												</div>
												<!--end::Heading-->
												<!--begin::Links-->
												<div class="text-center mb-1">
													<!--begin::Link-->
													<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_address" data-bs-toggle="modal">Try Now</a>
													<!--end::Link-->
													<!--begin::Link-->
													<a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
													<!--end::Link-->
												</div>
												<!--end::Links-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage widget 1-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Timeline Widget 4-->
										<div class="card h-md-100">
											<!--begin::Card header-->
											<div class="card-header position-relative py-0 border-bottom-1">
												<!--begin::Card title-->
												<h3 class="card-title text-gray-800 fw-bolder">Active Tasks</h3>
												<!--end::Card title-->
												<!--begin::Tabs-->
												<ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3 active" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_day">
															<!--begin::Title-->
															<span class="nav-text fw-bold fs-4 mb-3">Day</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_week">
															<!--begin::Title-->
															<span class="nav-text fw-bold fs-4 mb-3">Week</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_month">
															<!--begin::Title-->
															<span class="nav-text fw-bold fs-4 mb-3">Month</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_2022">
															<!--begin::Title-->
															<span class="nav-text fw-bold fs-4 mb-3">2022</span>
															<!--end::Title-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
															<!--end::Bullet-->
														</a>
													</li>
													<!--end::Nav item-->
												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pb-0">
												<!--begin::Tab content-->
												<div class="tab-content">
													<!--begin::Tab pane-->
													<div class="tab-pane active" id="kt_timeline_widget_4_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-4-blockui="true">
														<div class="table-responsive pb-10">
															<!--begin::Timeline-->
															<div id="kt_timeline_widget_4_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
															<!--end::Timeline-->
														</div>
													</div>
													<!--end::Tab pane-->
													<!--begin::Tab pane-->
													<div class="tab-pane" id="kt_timeline_widget_4_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
														<div class="table-responsive pb-10">
															<!--begin::Timeline-->
															<div id="kt_timeline_widget_4_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
															<!--end::Timeline-->
														</div>
													</div>
													<!--end::Tab pane-->
													<!--begin::Tab pane-->
													<div class="tab-pane" id="kt_timeline_widget_4_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-4-blockui="true">
														<div class="table-responsive pb-10">
															<!--begin::Timeline-->
															<div id="kt_timeline_widget_4_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
															<!--end::Timeline-->
														</div>
													</div>
													<!--end::Tab pane-->
													<!--begin::Tab pane-->
													<div class="tab-pane" id="kt_timeline_widget_4_tab_2022" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
														<div class="table-responsive pb-10">
															<!--begin::Timeline-->
															<div id="kt_timeline_widget_4_4" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
															<!--end::Timeline-->
														</div>
													</div>
													<!--end::Tab pane-->
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Timeline Widget 1-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>


		<!--begin::Post-->

















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
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
		<script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
		<script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>