<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


//$_SESSION[''];
//if (!isset($_SESSION['email'])){
//	header('location:sign-in');
//}



if(isset($_GET['id'])){

	$noteid=$_GET['id'];
}

//echo $noteid;


$s="public";
$sql="SELECT * FROM note WHERE shareid=:shareid AND stat=:stat";
$query=$dbh->prepare($sql);
$query->bindParam(':shareid',$noteid,PDO::PARAM_STR);
$query->bindParam(':stat',$s,PDO::PARAM_STR);

$query->execute();
$results=$query->fetch(PDO::FETCH_ASSOC);
if($query->rowCount()>0)
{
//	$valid=true;
//echo $results['notecontent'];


}
else{

	header("location: invalid");
}


function getname($userid,$dbh){
	$sql="SELECT * FROM user WHERE id=:id";
	$query=$dbh->prepare($sql);
	$query->bindParam(':id',$userid,PDO::PARAM_STR);
	
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




getviews($dbh,$noteid);
function getviews($dbh,$noteid){
	$sql="SELECT * FROM note WHERE shareid=:shareid";
	$query=$dbh->prepare($sql);
	$query->bindParam(':shareid',$noteid,PDO::PARAM_STR);
	
	$query->execute();
	$results=$query->fetch(PDO::FETCH_ASSOC);
	if($query->rowCount()>0)
	{
		$res=$results['views']+1;

	}


$sql="UPDATE note set views=:views where shareid=:shareid";
$query=$dbh->prepare($sql);
$query->bindParam(':views',$res,PDO::PARAM_STR);
$query->bindParam(':shareid',$noteid,PDO::PARAM_STR);

$query->execute();
	



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
		<title>Note</title>
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

										

													<?php   
														
													
														//if($valid==true){


														
													
														$sql="SELECT * FROM note WHERE shareid='".$noteid."'";
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
 
												
												<h1 class="fs-2x text-dark mb-6"><?php echo $result->notetitle?></h1>
												
												<h8 class="fs-8x text-dark mb-6"><?php $date=$result->date; echo (date('F j, Y, g:i a',strtotime($date)))?> by <span class="badge badge-light-success">
												
																
															
												<?php echo getname($result->userid,$dbh)?> 
												</span> <span class="badge badge-light-primary">Views: <?php echo ($result->views)?> </span></h8>
												<span data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" class="badge badge-light-primary"><i class="fonticon-play text-primary fs-3"></i></i></span>

												<br>
												<br>
												<br>
 
												<div class="fs-5 text-gray-600 fw-bold" ><?php echo $result->notecontent?></div>

											
												<textarea hidden id="r" ><?php echo $result->notecontent?></textarea>
												<br>
												<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
												<div id="qrcode-2"></div>
												<script type="text/javascript">
												var qrcode = new QRCode(document.getElementById("qrcode-2"), {
													text: "<?php echo 'localhost/Overflow/views/shared?id='.$_GET['id']?>",
													width: 128,
													height: 128,
													colorDark : "#000000",
													colorLight : "#ffffff",
													correctLevel : QRCode.CorrectLevel.H
												});
												</script>
				
												<br>
												<h5 class="fs-1x text-dark mb-1">Note ID: <?php echo $result->uid?> </h5>
												<h5 class="fs-1x text-dark mb-1">Note Share ID: <?php echo $result->shareid?> </h5>
											

												
												<!--end::Text-->
											</div>

											
							<!--end::Heading-->
											<!--begin::Body-->
											<!--begin::Table-->
									
											<?php 
#$cnt = 0;
$cnt=$cnt+1; 
  }
  }
  else{

	//	echo $noteid;
  }




?>
	
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
		
			<div class="modal-dialog modal-dialog-centered mw-800px">
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
					<!--begin::Modal body-->
				
				
					<div class="modal-body scroll-y pt-0 pb-15">
						<!--begin::Wrapper-->
						
						<div class="mw-lg-600px mx-auto">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
							
								<h1 class="mb-3">Listen to Note</h1>
								<!--end::Title-->
								<!--begin::Description-->
		
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="mb-10">
							
								<!--begin::Title-->
								<div id="bars">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>

								
								<h4 hidden style="text-align: left;" class="fs-5 fw-bold text-gray-800">Select Voices <span class="badge badge-light-primary"></span></h4>
								<!--end::Title-->
							
							
								<!--begin::Title-->
								<div class="d-flex">
								<select id="select" class="form-select form-select-solid" data-control="select2" data-placeholder="Select voice" data-hide-search="true">
								</select>
									
								</div>
								<br>
								<a href="#" id="listen"class="btn btn-primary fw-bold me-2" onclick=" openCard()">Listen Now</a> <a href="#" id="cancel"class="btn btn-primary fw-bold me-2">Cancel</a>
								<br>


								
				
								<!--end::Title-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							
							<!--end::Actions-->
							<!--begin::Input group-->
							
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
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


<style>

#bars {
    height: 30px;
    left: 50%;
    margin: -30px 0 0 -20px;
    position: absolute;
    top: 50%;
    width: 40px;
}

.bar {
   background: #666;
    bottom: 1px;
    height: 3px;
    position: absolute;
    width: 3px;      
    animation: sound 0ms -800ms linear infinite alternate;
}

@keyframes sound {
    0% {
       opacity: .35;
        height: 3px; 
    }
    100% {
        opacity: 1;       
        height: 28px;        
    }
}

.bar:nth-child(1)  { left: 1px; animation-duration: 474ms; }
.bar:nth-child(2)  { left: 5px; animation-duration: 433ms; }
.bar:nth-child(3)  { left: 9px; animation-duration: 407ms; }
.bar:nth-child(4)  { left: 13px; animation-duration: 458ms; }
.bar:nth-child(5)  { left: 17px; animation-duration: 400ms; }
.bar:nth-child(6)  { left: 21px; animation-duration: 427ms; }
.bar:nth-child(7)  { left: 25px; animation-duration: 441ms; }
.bar:nth-child(8)  { left: 29px; animation-duration: 419ms; }
.bar:nth-child(9)  { left: 33px; animation-duration: 487ms; }
.bar:nth-child(10) { left: 37px; animation-duration: 442ms; }
</style>



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


  		<script>

			//  document.getElementById("anim").style.display = "none";
let avoice = document.getElementById('bars')
avoice.style.display = 'none';
function openCard() {
	avoice.style.display = 'block'
}

function hideC() { 
	avoice.style.display = 'none'
}

document.querySelector("#cancel").addEventListener("click", () => {
  window.speechSynthesis.cancel();
  avoice.style.display = 'none';
  //document.getElementById("anim").style.display = "none";

});
		
const textarea = document.querySelector("#r"),
voiceList = document.querySelector("#select"),
speechBtn = document.querySelector("#listen");



let synth = speechSynthesis,
isSpeaking = true;

voices();

function voices(){
    for(let voice of synth.getVoices()){
        //selecting "Google US English" voice as default
        let selected = voice.name === "Microsoft David - English (United States) (en-US)" ? "selected" : "";
        //create an option tag with passing voice name and voice language
        let option = `<option value="${voice.name}" ${selected}>${voice.name} (${voice.lang})</option>`;
        voiceList.insertAdjacentHTML("beforeend", option);
    }
}

synth.addEventListener("voiceschanged", voices);

function textToSpeech(text){
    let utterance = new SpeechSynthesisUtterance(text);
    for(let voice of synth.getVoices()){
        if(voice.name === voiceList.value){
            utterance.voice = voice;
        }
    }
    synth.speak(utterance);
}

speechBtn.addEventListener("click", e =>{
    e.preventDefault();
    if(textarea.value !== ""){
	//	document.getElementById("anim").style.display = "block";

        if(!synth.speaking){
            textToSpeech(textarea.value);
        }
        if(textarea.value.length > 80){
            setInterval(()=>{
                if(!synth.speaking && !isSpeaking){
                    isSpeaking = true;
                    speechBtn.innerText = "Listen";
                }else{
                }
            }, 500);
            if(isSpeaking){
                synth.resume();
                isSpeaking = false;
                speechBtn.innerText = "Pause";
            }else{
				avoice.style.display = 'none';
                synth.pause();
                isSpeaking = true;
                speechBtn.innerText = "Resume";
            }
        }else{
            speechBtn.innerText = "Listen";
        }
    }
});</script>



	</body>
	<!--end::Body-->
</html>