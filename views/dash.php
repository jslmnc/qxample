<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();

if (!isset($_SESSION['admin'])) {
	header('location:logout');
	
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
		<meta name="description" content="Overflow." />
		<meta name="keywords" content="Overflow" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Overflow" />
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
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="">
							<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="h-25px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
								
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Welcome, Admin</span>
									</div>
								</div>
								
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
													<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Account</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/account/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">My Account</span>
											</a>
										</div>
										
										
									
									
									
										
									</div>
								</div>
							
	
	
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
									</div>
								</div>
						
	
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">User Management</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Users</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="users">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users List</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../Overflow/views/apps/user-management/users/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View User</span>
													</a>
												</div>
											</div>
										</div>
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Roles</span>
												<span class="menu-arrow"></span>
											</span>
											<div class="menu-sub menu-sub-accordion">
												<div class="menu-item">
													<a class="menu-link" href="../../Overflow/views/apps/user-management/roles/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles List</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="../../Overflow/views/apps/user-management/roles/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Role</span>
													</a>
												</div>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/user-management/permissions.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Permissions</span>
											</a>
										</div>
									</div>
								</div>
		
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Subscriptions</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/subscriptions/getting-started.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Getting Started</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/subscriptions/list.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Subscription List</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/subscriptions/add.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add Subscription</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/subscriptions/view.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Subscription</span>
											</a>
										</div>
									</div>
								</div>
							
							
							
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
													<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
													<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Chat</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/chat/private.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Private Chat</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/chat/group.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Group Chat</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="../../Overflow/views/apps/chat/drawer.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Drawer Chat</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="../../Overflow/views/apps/calendar.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
													<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
													<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Calendar</span>
									</a>
								</div>
							
								
							
							
								<div class="menu-item">
									<div class="menu-content">
										<div class="separator mx-1 my-4"></div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="currentColor" />
													<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Team H4F</span>
									</a>
								</div>
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
				
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../Overflow/views/index.html" class="d-lg-none">
									<img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
					
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Search-->

									<!--end::Search-->
									<!--begin::Activities-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Drawer toggle-->
										<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
											<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Drawer toggle-->
									</div>
									<!--end::Activities-->
									<!--begin::Notifications-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu- wrapper-->
										<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
													<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
													<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
													<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
												<!--begin::Title-->
												<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
												<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
												<!--end::Title-->
												<!--begin::Tabs-->
												<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
													</li>
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
													</li>
												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Heading-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab panel-->
												<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
													<!--begin::Items-->
													<div class="scroll-y mh-325px my-5 px-8">
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
																				<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
																	<div class="text-gray-400 fs-7">Phase 1 development</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">1 hr</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																				<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																				<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
																	<div class="text-gray-400 fs-7">Confidential staff documents</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-warning">
																		<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-warning">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
																				<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
																	<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">5 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-success">
																		<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="currentColor" />
																				<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="currentColor" />
																				<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="currentColor" />
																				<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Redux</a>
																	<div class="text-gray-400 fs-7">New frontend admin theme</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 days</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor" />
																				<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Breafing</a>
																	<div class="text-gray-400 fs-7">Product launch status update</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">21 Jan</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-info">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-info">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
																				<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner Assets</a>
																	<div class="text-gray-400 fs-7">Collection of banner images</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">21 Jan</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-warning">
																		<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-warning">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																				<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor" />
																				<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon Assets</a>
																	<div class="text-gray-400 fs-7">Collection of SVG icons</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">20 March</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
													<!--begin::View more-->
													<div class="py-3 text-center border-top">
														<a href="../../Overflow/views/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
													</div>
													<!--end::View more-->
												</div>
												<!--end::Tab panel-->
												<!--begin::Tab panel-->
												<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column px-9">
														<!--begin::Section-->
														<div class="pt-10 pb-0">
															<!--begin::Title-->
															<h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
															<!--end::Title-->
															<!--begin::Text-->
															<div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
															<!--end::Text-->
															<!--begin::Action-->
															<div class="text-center mt-5 mb-9">
																<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
															</div>
															<!--end::Action-->
														</div>
														<!--end::Section-->
														<!--begin::Illustration-->
														<div class="text-center px-4">
															<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tab panel-->
												<!--begin::Tab panel-->
												<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
													<!--begin::Items-->
													<div class="scroll-y mh-325px my-5 px-8">
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Just now</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">5 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Search query</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 days</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">API connection</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">1 week</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Database restore</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Mar 5</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">System update</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">May 15</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS update</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Apr 3</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">API rollback</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Jun 30</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Jul 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Sep 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Dec 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
													<!--begin::View more-->
													<div class="py-3 text-center border-top">
														<a href="../../Overflow/views/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-5">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
													</div>
													<!--end::View more-->
												</div>
												<!--end::Tab panel-->
											</div>
											<!--end::Tab content-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::Notifications-->
									<!--begin::Chat-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
											<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
													<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
													<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
										</div>
										<!--end::Menu wrapper-->
									</div>
									<!--end::Chat-->
									<!--begin::Quick links-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/pattern-1.jpg')">
												<!--begin::Title-->
												<h3 class="text-white fw-bold mb-3">Quick Links</h3>
												<!--end::Title-->
												<!--begin::Status-->
												<span class="badge bg-primary py-2 px-3">25 pending tasks</span>
												<!--end::Status-->
											</div>
											<!--end::Heading-->
											<!--begin:Nav-->
											<div class="row g-0">
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../Overflow/views/apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z" fill="currentColor" />
																<path d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
														<span class="fs-7 text-gray-400">eCommerce</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../Overflow/views/apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
														<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
														<span class="fs-7 text-gray-400">Console</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../Overflow/views/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
														<span class="fs-7 text-gray-400">Pending Tasks</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../Overflow/views/apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
														<span class="fs-7 text-gray-400">Latest cases</span>
													</a>
												</div>
												<!--end:Item-->
											</div>
											<!--end:Nav-->
											<!--begin::View more-->
											<div class="py-2 text-center border-top">
												<a href="../../Overflow/views/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::Quick links-->
								
									<!--end::Theme mode-->
									<!--begin::User menu-->
									<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img src="assets/media/avatars/300-1.jpg" alt="user" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
														<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Admin</span></div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../Overflow/views/account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu item-->
										
											<!--end::Menu item-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="../../Overflow/views/account/settings.html" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../Overflow/views/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
										
										
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User menu-->
									<!--begin::Header menu toggle-->
									<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
										<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
											<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
													<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Header menu toggle-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Light Skin</h1>
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
										<li class="breadcrumb-item text-muted">Aside</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Light Skin</li>
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
													<span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body pt-2 pb-4 d-flex align-items-center">
												<!--begin::Chart-->
												<div class="d-flex flex-center me-5 pt-2">
													<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
												</div>
												<!--end::Chart-->
												<!--begin::Labels-->
												<div class="d-flex flex-column content-justify-center w-100">
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end">$7,660</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center my-3">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
														<!--end::Bullet-->
														<!--begin::Label-->
														<div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
														<!--end::Label-->
														<!--begin::Stats-->
														<div class="fw-boldest text-gray-700 text-xxl-end">$2,820</div>
														<!--end::Stats-->
													</div>
													<!--end::Label-->
													<!--begin::Label-->
													<div class="d-flex fs-6 fw-bold align-items-center">
														<!--begin::Bullet-->
														<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
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
										<!--begin::Card widget 5-->
										<div class="card card-flush h-md-50 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">1,836</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-danger fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->2.2%</span>
														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end pt-0">
												<!--begin::Progress-->
												<div class="d-flex align-items-center flex-column mt-3 w-100">
													<div class="d-flex justify-content-between w-100 mt-auto mb-2">
														<span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
														<span class="fw-bolder fs-6 text-gray-400">62%</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-success rounded">
														<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 5-->
									</div>
									<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										<!--begin::Card widget 6-->
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
														<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">2,420</span>
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
														<!--end::Svg Icon-->2.6%</span>
														<!--end::Badge-->
													</div>
													<!--end::Info-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">Average Daily Sales</span>
													<!--end::Subtitle-->
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Card body-->
											<div class="card-body d-flex align-items-end px-0 pb-0">
												<!--begin::Chart-->
												<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 6-->
										<!--begin::Card widget 7-->
										<div class="card card-flush h-md-50 mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">6.3k</span>
													<!--end::Amount-->
													<!--begin::Subtitle-->
													<span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
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
														<span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
													</a>
												</div>
												<!--end::Users group-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 7-->
									</div>
									<!--begin::Col-->
									<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
										<!--begin::Chart widget 3-->
										<div class="card card-flush overflow-hidden h-md-100">
											<!--begin::Header-->
											<div class="card-header py-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Sales This Months</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
														<span class="svg-icon svg-icon-1">
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
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
												<!--begin::Statistics-->
												<div class="px-9 mb-5">
													<!--begin::Statistics-->
													<div class="d-flex mb-2">
														<span class="fs-4 fw-bold text-gray-400 me-1">$</span>
														<span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">14,094</span>
													</div>
													<!--end::Statistics-->
													<!--begin::Description-->
													<span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
													<!--end::Description-->
												</div>
												<!--end::Statistics-->
												<!--begin::Chart-->
												<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Chart widget 3-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-6 mb-xl-10">
										<!--begin::Tables widget 2-->
										<div class="card h-md-100">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0">
												<!--begin::Title-->
												<h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
												<!--end::Title-->
												<!--begin::Menu-->
												<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
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
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
												<!--begin::Nav-->
												<ul class="nav nav-pills nav-pills-custom mb-3">
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/svg/products-categories/t-shirt.svg" class="" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/svg/products-categories/gaming.svg" class="" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/svg/products-categories/watch.svg" class="" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3 me-3 me-lg-6">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/svg/products-categories/gloves.svg" class="nav-icon" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="nav-item mb-3">
														<!--begin::Link-->
														<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
															<!--begin::Icon-->
															<div class="nav-icon">
																<img alt="" src="assets/media/svg/products-categories/shoes.svg" class="nav-icon" />
															</div>
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
															<!--end::Subtitle-->
															<!--begin::Bullet-->
															<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
															<!--end::Bullet-->
														</a>
														<!--end::Link-->
													</li>
													<!--end::Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="ps-0 w-50px">ITEM</th>
																		<th class="min-w-140px"></th>
																		<th class="text-end min-w-140px">QTY</th>
																		<th class="pe-0 text-end min-w-120px">PRICE</th>
																		<th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="ps-0 w-50px">ITEM</th>
																		<th class="min-w-140px"></th>
																		<th class="text-end min-w-140px">QTY</th>
																		<th class="pe-0 text-end min-w-120px">PRICE</th>
																		<th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/197.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/178.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/22.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="ps-0 w-50px">ITEM</th>
																		<th class="min-w-140px"></th>
																		<th class="text-end min-w-140px">QTY</th>
																		<th class="pe-0 text-end min-w-120px">PRICE</th>
																		<th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/1.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/24.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/71.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="ps-0 w-50px">ITEM</th>
																		<th class="min-w-140px"></th>
																		<th class="text-end min-w-140px">QTY</th>
																		<th class="pe-0 text-end min-w-120px">PRICE</th>
																		<th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/41.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/63.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/59.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
																		<th class="ps-0 w-50px">ITEM</th>
																		<th class="min-w-140px"></th>
																		<th class="text-end min-w-140px">QTY</th>
																		<th class="pe-0 text-end min-w-120px">PRICE</th>
																		<th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/10.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/96.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="assets/media/stock/ecommerce/13.gif" class="w-50px ms-n1" alt="" />
																		</td>
																		<td class="ps-0">
																			<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
																			<span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
																		</td>
																		<td>
																			<span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
																		</td>
																		<td class="text-end pe-0">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Tables widget 2-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">
										<!--begin::Chart widget 4-->
										<div class="card card-flush overflow-hidden h-md-100">
											<!--begin::Header-->
											<div class="card-header py-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
														<span class="svg-icon svg-icon-1">
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
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
												<!--begin::Info-->
												<div class="px-9 mb-5">
													<!--begin::Statistics-->
													<div class="d-flex align-items-center mb-2">
														<!--begin::Currency-->
														<span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
														<!--end::Currency-->
														<!--begin::Value-->
														<span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">3,706</span>
														<!--end::Value-->
														<!--begin::Label-->
														<span class="badge badge-success fs-base">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
														<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->4.5%</span>
														<!--end::Label-->
													</div>
													<!--end::Statistics-->
													<!--begin::Description-->
													<span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This Month</span>
													<!--end::Description-->
												</div>
												<!--end::Info-->
												<!--begin::Chart-->
												<div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Chart widget 4-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::Engage widget 1-->
										<div class="card h-md-100">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column flex-center">
												<!--begin::Heading-->
												<div class="mb-2">
													<!--begin::Title-->
													<h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
													<br />new
													<span class="fw-boldest">eCommerce App ?</span></h1>
													<!--end::Title-->
													<!--begin::Illustration-->
													<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12" style="background-image:url('assets/media/svg/illustrations/easy/2.svg')"></div>
													<!--end::Illustration-->
												</div>
												<!--end::Heading-->
												<!--begin::Links-->
												<div class="text-center mb-1">
													<!--begin::Link-->
													<a class="btn btn-sm btn-primary me-2" href="../../Overflow/views/apps/ecommerce/sales/listing.html">View App</a>
													<!--end::Link-->
													<!--begin::Link-->
													<a class="btn btn-sm btn-light" href="../../Overflow/views/apps/ecommerce/catalog/add-product.html">New Product</a>
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
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Table Widget 4-->
										<div class="card card-flush h-xl-100">
											<!--begin::Card header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-gray-800">Product Orders</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span>
												</h3>
												<!--end::Title-->
												<!--begin::Actions-->
												<div class="card-toolbar">
													<!--begin::Filters-->
													<div class="d-flex flex-stack flex-wrap gap-4">
														<!--begin::Destination-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-gray-400 fs-7 me-2">Cateogry</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="a">Category A</option>
																<option value="b">Category A</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Destination-->
														<!--begin::Status-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-gray-400 fs-7 me-2">Status</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="Shipped">Shipped</option>
																<option value="Confirmed">Confirmed</option>
																<option value="Rejected">Rejected</option>
																<option value="Pending">Pending</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Status-->
														<!--begin::Search-->
														<div class="position-relative my-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
															<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
														</div>
														<!--end::Search-->
													</div>
													<!--begin::Filters-->
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-2">
												<!--begin::Table-->
												<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
													<!--begin::Table head-->
													<thead>
														<!--begin::Table row-->
														<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
															<th class="min-w-100px">Order ID</th>
															<th class="text-end min-w-100px">Created</th>
															<th class="text-end min-w-125px">Customer</th>
															<th class="text-end min-w-100px">Total</th>
															<th class="text-end min-w-100px">Profit</th>
															<th class="text-end min-w-50px">Status</th>
															<th class="text-end"></th>
														</tr>
														<!--end::Table row-->
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody class="fw-bolder text-gray-600">
														<tr data-kt-table-widget-4="subtable_template" class="d-none">
															<td colspan="2">
																<div class="d-flex align-items-center gap-3">
																	<a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
																		<img src="" data-kt-src-path="assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
																	</a>
																	<div class="d-flex flex-column text-muted">
																		<a href="#" class="text-gray-800 text-hover-primary fw-bolder" data-kt-table-widget-4="template_name">Product name</a>
																		<div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
																	</div>
																</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Cost</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_cost">1</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Qty</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_qty">1</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7">Total</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_total">name</div>
															</td>
															<td class="text-end">
																<div class="text-gray-800 fs-7 me-3">On hand</div>
																<div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_stock">32</div>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
															</td>
															<td class="text-end">7 min ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
															</td>
															<td class="text-end">$630.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$86.70</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
															</td>
															<td class="text-end">52 min ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
															</td>
															<td class="text-end">$25.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$4.20</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
															</td>
															<td class="text-end">1 hour ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
															</td>
															<td class="text-end">$1,630.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$203.90</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
															</td>
															<td class="text-end">3 hour ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
															</td>
															<td class="text-end">$119.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$12.00</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
															</td>
															<td class="text-end">2 day ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
															</td>
															<td class="text-end">$660.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$52.26</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
															</td>
															<td class="text-end">2 day ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
															</td>
															<td class="text-end">$290.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$29.00</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
															</td>
														</tr>
														<tr>
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
															</td>
															<td class="text-end">7 min ago</td>
															<td class="text-end">
																<a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
															</td>
															<td class="text-end">$590.00</td>
															<td class="text-end">
																<span class="text-gray-800 fw-boldest">$50.00</span>
															</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
															</td>
															<td class="text-end">
																<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-off">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																	<span class="svg-icon svg-icon-3 m-0 toggle-on">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
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
											<!--end::Card body-->
										</div>
										<!--end::Table Widget 4-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Product Delivery</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">1M Products Shipped so far</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Jason Bourne</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-success">Delivered</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/209.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Marie Durant</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-primary">Shipping</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/214.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Dan Wilson</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-danger">Confirmed</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/211.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Elephant 1802</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Lebron Wayde</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-success">Delivered</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/215.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Ana Simmons</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-primary">Shipping</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3">
														<!--begin::Info-->
														<div class="d-flex flex-stack mb-3">
															<!--begin::Wrapper-->
															<div class="me-3">
																<!--begin::Icon-->
																<img src="assets/media/stock/ecommerce/192.gif" class="w-50px ms-n1 me-1" alt="" />
																<!--end::Icon-->
																<!--begin::Title-->
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bolder">Yellow Stone</a>
																<!--end::Title-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Action-->
															<div class="m-0">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																	<span class="svg-icon svg-icon-1">
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
															<!--end::Action-->
														</div>
														<!--end::Info-->
														<!--begin::Customer-->
														<div class="d-flex flex-stack">
															<!--begin::Name-->
															<span class="text-gray-400 fw-bolder">To:
															<a href="../../Overflow/views/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">Kevin Leonard</a></span>
															<!--end::Name-->
															<!--begin::Label-->
															<span class="badge badge-light-danger">Confirmed</span>
															<!--end::Label-->
														</div>
														<!--end::Customer-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Table Widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Card header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Stock Report</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
												</h3>
												<!--end::Title-->
												<!--begin::Actions-->
												<div class="card-toolbar">
													<!--begin::Filters-->
													<div class="d-flex flex-stack flex-wrap gap-4">
														<!--begin::Destination-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-muted fs-7 me-2">Cateogry</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="a">Category A</option>
																<option value="b">Category B</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Destination-->
														<!--begin::Status-->
														<div class="d-flex align-items-center fw-bolder">
															<!--begin::Label-->
															<div class="text-muted fs-7 me-2">Status</div>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="In Stock">In Stock</option>
																<option value="Out of Stock">Out of Stock</option>
																<option value="Low Stock">Low Stock</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Status-->
														<!--begin::Search-->
														<a href="../../Overflow/views/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
														<!--end::Search-->
													</div>
													<!--begin::Filters-->
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body">
												<!--begin::Table-->
												<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
													<!--begin::Table head-->
													<thead>
														<!--begin::Table row-->
														<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
															<th class="min-w-100px">Item</th>
															<th class="text-end pe-3 min-w-100px">Product ID</th>
															<th class="text-end pe-3 min-w-150px">Date Added</th>
															<th class="text-end pe-3 min-w-100px">Price</th>
															<th class="text-end pe-3 min-w-50px">Status</th>
															<th class="text-end pe-0 min-w-25px">Qty</th>
														</tr>
														<!--end::Table row-->
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody class="fw-bolder text-gray-600">
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Macbook Air M1</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#XGY-356</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">02 Apr, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$1,230</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="58">
																<span class="text-dark fw-bolder">58 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Surface Laptop 4</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#YHD-047</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">01 Apr, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$1,060</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="0">
																<span class="text-dark fw-bolder">0 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Logitech MX 250</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#SRR-678</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">24 Mar, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$64</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="290">
																<span class="text-dark fw-bolder">290 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">AudioEngine HD3</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#PXF-578</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">24 Mar, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$1,060</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="46">
																<span class="text-dark fw-bolder">46 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">HP Hyper LTR</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#PXF-778</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">16 Jan, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$4500</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="78">
																<span class="text-dark fw-bolder">78 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#XGY-356</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">22 Dec, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$1,060</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="8">
																<span class="text-dark fw-bolder">8 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
														<tr>
															<!--begin::Item-->
															<td>
																<a href="../../Overflow/views/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
															</td>
															<!--end::Item-->
															<!--begin::Product ID-->
															<td class="text-end">#XVR-425</td>
															<!--end::Product ID-->
															<!--begin::Date added-->
															<td class="text-end">27 Dec, 2022</td>
															<!--end::Date added-->
															<!--begin::Price-->
															<td class="text-end">$1,060</td>
															<!--end::Price-->
															<!--begin::Status-->
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
															</td>
															<!--end::Status-->
															<!--begin::Qty-->
															<td class="text-end" data-order="124">
																<span class="text-dark fw-bolder">124 PCS</span>
															</td>
															<!--end::Qty-->
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Table Widget 5-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->




















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
		<!--begin::Javascript-->
		
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
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