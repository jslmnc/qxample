<?php
include('C:\xampp\htdocs\Overflow\includes\config.php');
session_start();


//$_SESSION[''];
//if (!isset($_SESSION['email'])){
//	header('location:sign-in');
//}
function decry($val){

	$p 	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // user define key
	$s 		= '459b9511a7f650ebd327889c45cc4e9b'; // user define secret key
	$encryptMethod      = "AES-256-CBC";
	
	$key    = hash('sha256', $p);
	$ivalue = substr(hash('sha256', $s), 0, 16); // sha256 is hash_hmac_algo
	
	return $output = openssl_decrypt(base64_decode($val), $encryptMethod, $key, 0, $ivalue);
}


if(empty($_GET['status'])||($_GET['status'])!=='ACTIVE'){

	header('location:invalid');


}
if(empty($_GET['uid'])){

	header('location:invalid');


}
else{


  $user=decry($_GET['uid']);
}

function name($dbh,$uid){

	$sql="SELECT * FROM user WHERE uid=:uid";
	$query=$dbh->prepare($sql);
	$query->bindParam(':uid',$uid,PDO::PARAM_STR);
	
	$query->execute();
	$results=$query->fetch(PDO::FETCH_ASSOC);
	if($query->rowCount()>0)
	{

		return $results['fname'].' '.$results['lname'];

	}


}

function email($dbh,$uid){

	$sql="SELECT * FROM user WHERE uid=:uid";
	$query=$dbh->prepare($sql);
	$query->bindParam(':uid',$uid,PDO::PARAM_STR);
	
	$query->execute();
	$results=$query->fetch(PDO::FETCH_ASSOC);
	if($query->rowCount()>0)
	{

		return $results['email'];

	}


}

$s=$user;
$sql="SELECT * FROM subscription WHERE userid=:userid";
$query=$dbh->prepare($sql);
$query->bindParam(':userid',$s,PDO::PARAM_STR);

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
		<title>Paypal Subscription</title>
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
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Signup Verify Email -->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
					<!--begin::Logo-->
					<a href="" class="mb-10 pt-lg-10">
						<img alt="Logo" src="assets/media/logos/overflowlogo.png" class="h-60px mb-5" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->

					

					

					<form method="post">
					<div class="pt-lg-10 mb-10">

					<html><head></head><body>
   
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=no">
   <title>You sent an automatic payment to Overflow</title><!-- Noto Sans Google Font --><link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic&amp;subset=latin,greek,greek-ext,devanagari,vietnamese,cyrillic-ext,latin-ext,cyrillic" rel="stylesheet" type="text/css">
<style type="text/css">
 <!-- Begin Styles -->
/* PP Sans Font Import */
@font-face {
font-family: 'pp-sans-big-light';
font-weight: 100;
font-style: normal;
src: url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/PP-Sans/PayPalSansBig-Light.woff") format("woff"), url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/headlinedark/festivo1.ttf") format("truetype"), url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/PP-Sans/PayPalSansBig-Light.svg") format("svg")
}
@font-face {
font-family:"pp-sans-big-bold";
src:url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/PP-Sans/PayPalSansBig-Bold.woff") format("woff"), url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/headlinedark/festivo1.ttf") format("truetype"), url("https://www.paypalobjects.com/webstatic/mktg/2014design/font/PP-Sans/PayPalSansBig-Bold.svg") format("svg")
}
/* PP Sans Class */
.ppsans { font-family: 'pp-sans-big-light', 'Noto Sans', Calibri, Trebuchet, Arial, sans serif !important; }
.ppsansbold { font-family: 'pp-sans-big-bold', 'Noto Sans', Calibri, Trebuchet, Arial, sans serif !important; }
/* prevent iOS font upsizing */
* { -webkit-text-size-adjust: none; }
/* force Outlook.com to honor line-height */
.ExternalClass * { line-height: 100%; }
td { mso-line-height-rule: exactly; }
/* prevent iOS auto-linking */
/* Android margin fix */
body { margin: 0 !important; }
div[style*="margin: 16px 0"] { margin: 0 !important; }
/** Prevent Outlook Purple Links **/
.greyLink a:link { color: #949595; }
/* prevent iOS auto-linking */
.applefix a { /* use on a span around the text */
color: inherit;
text-decoration: none;
}
/* neptune links standard color for PayPal */
a {
color: #0070ba !important;
}
.neptuneButtonWhite a {
color: #ffffff !important;
}
.neptuneButtonBlue a {
color: #0070BA !important;
}
.pisces-menu a {
color: #086A87 !important;
}
/*** Responsive CSS ***/
@media only screen and (max-width: 414px) {
/*** Layout ***/
body {
width: 100%;
min-width: 100%;
position: relative;
top: 0;
left: 0;
right: 0;
margin: 0;
padding: 0;
}
.marginFix {
position: relative;
top: 0;
left: 0;
right: 0;
}
.mobContent {
width: 100% !important;
min-width: 100% !important;
padding: 0px 0px 0px 0px !important;
}
/*.mobMargin { width: 10% !important; }*/
.hide {
width: 0px !important;
height: 0px !important;
display: none !important;
}
.full-width {
width: 100% !important;
min-width: 100% !important;
}
.stackTbl {
width: 100% !important;
display: table !important;
}
.stackTblMarginTop {
width: 100% !important;
display: table !important;
margin-top: 20px !important;
}
.center { margin: 0px auto !important; }
.floatLeft {
float: left !important;
width: 35% !important;
}
.floatRight {
float: right !important;
width: 60% !important;
}
.autoHeight { height: auto !important; }
.autoWidth { width:auto !important; }
/*** Padding Styles ***/
.mobilePadding { padding: 20px 20px 20px 20px !important; }
.mobilePadding1 { padding: 40px 20px 40px 20px !important; height: auto !important; }
.mobilePadding2 { padding: 0px 20px 40px 20px !important; }
.mobilePadding3 { padding: 20px 20px 0px 20px !important; }
.mobilePadding4 { padding: 0px 0px 30px 0px !important; }
.mobilePadding5 { padding:0px 20px 30px 20px !important; }
.mobilePadding6 { padding:30px 20px 30px 20px !important; }
.mobilePadding7 { padding:0px 20px 0px 20px !important; }
.mobilePadding8 { padding:50px 0px 50px 0px !important; }
.mobilePadding9 { padding: 10px 0px 15px 0px !important; } 
.mobilePadding10 { padding: 0px 20px 0px 20px !important; } 
.mobilePadding11 { padding: 40px 0px 40px 0px !important; }
.mobilePadding12 { padding: 40px 0px 0px 0px !important; }
.mobilePadding13 { padding: 0px 0px 40px 0px !important; }
.mobilePadding14 { padding: 40px 30px 10px 30px !important; }
.mobilePadding15 { padding: 0px 30px 0px 30px !important; }
.mobilePadding16 { padding: 0px 0px 10px 0px !important; }
.mobilePadding17 { padding: 0px 0px 30px 0px !important; }
.padding0 { padding: 0px !important; }
.topPadding0 { padding-top: 0px !important; }
.topPadding10 { padding-top: 10px !important; }
.topPadding20 { padding-top: 20px !important; }
.topPadding30 { padding-top: 30px !important; }
.topPadding40 { padding-top: 40px !important; }
.bottomPadding0 { padding-bottom: 0px !important; }
.bottomPadding10 { padding-bottom: 10px !important; }
.bottomPadding20 { padding-bottom: 20px !important; }
.bottomPadding30 { padding-bottom: 30px !important; }
.bottomPadding40 { padding-bottom: 40px !important; }
/* use to make image scale to 100 percent */
.fullWidthImg {
width: 100% !important;
height: auto !important;
min-width: 100% !important;
}
/* background image replacement scalable height */
.bgSwap {
background-image: url(images/lifestyle-background-mob.jpg) !important;
width: 100% !important;
padding-top: 65% !important;  /* update height here */
background-size: cover !important;
background-position: center top !important;
background-repeat: no-repeat !important;
display: block !important;
}
/*** Border Styles ***/
.borderBottomDot { border-bottom: 1px dotted #999999 !important; }
/*** Text Align Styles ***/
.textAlignLeft { text-align:left !important; }
.textAlignRight { text-align:right !important; }
.textAlignCenter { text-align:center !important; }
/*** Misc Styles ***/
.mobileStrong { font-weight: bold !important; }
/*** Width Styles ***/
.td150px { width: 150px !important; }
.td130px { width: 130px !important; }
.td120px { width: 120px !important; }
.td100px { width: 100px !important; }
/*** Image Width Styles ***/
.imgWidth10px { width: 10px !important; }
/*** END Responsive CSS ***/
}
/* use to make image scale to 100 percent */
.mpidiv img {
width: 100% !important;
height: auto !important;
min-width: 100% !important;
max-width: 100% !important;
}
/* Fix for Neptune partner logo */
.partner_image {
max-width: 250px !important;
max-height: 90px !important;
display: block;
}
</style>
<style type="text/css"> 
/*sup {font-size:7px !important;}*/

/*sup {font-size:7px !important;}*/

/*sup {font-size:7px !important;}*/

/*sup {font-size:7px !important;}*/
</style><!--OUTLOOK HOSTED FONT FIX - DO NOT DELETE--><!--[if gt mso 9]><style type="text/css">.ppsans {font-family: Calibri, Trebuchet, Arial, sans serif !important;} /* prevents Outlook from defaulting to Times New Roman */</style><![endif]-->

<div style="display:none; display:none !important; color:#fff; font-size:1pt;"></div>	<!-- Preheader --> 
<span style="display:none !important; font-size:0px; line-height:0px; color:#ffffff;">
Here's your receipt.
</span> 
<!-- end Preheader --><!-- CONTAINER -->
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="marginFix">
<!-- WHITE BACKGROUND -->
<tbody><tr>
   <td bgcolor="#ffffff" class="mobMargin" style="font-size:0px;">&nbsp;
   </td>
   <td bgcolor="#ffffff" width="660" align="center" class="mobContent">
   <!-- inner container / place all modules below --><!-- Greeting Curved -->
 <table cellpadding="0" cellspacing="0" border="0" width="100%">
   <tbody><tr>
     <td class="hide">&nbsp;</td>
     <td align="center" width="600"><table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f5f5f5">
         <tbody><tr> 
           <!-- copy 14px/18px -->
           <td align="center" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:14px; line-height:18px;color:#777777;padding:20px" class="ppsans">Hello, <?php echo name($dbh,$_SESSION['userid']);?></td>
           <!-- end copy --> 
         </tr>
       </tbody></table>
       <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f5f5f5">
         <!-- Round slice / delete row if not needed -->
         <tbody><tr>
           <td align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody><tr>
                 <td>&nbsp;</td>
                 <td width="117" align="center" valign="bottom"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/pplogo-circletop-sm.png" width="117" height="16" style="display:block;" border="0" alt=""></td>
                 <td>&nbsp;</td>
               </tr>
             </tbody></table></td>
         </tr>
         <!-- end Round slice / delete row if not needed -->
       </tbody></table></td>
     <td class="hide">&nbsp;</td>
   </tr>
 </tbody></table>
 <!-- end Greeting Curved --> 
     <!-- Logo Header Standard -->
 <table cellpadding="0" cellspacing="0" border="0" width="100%">
     <!-- logo row 1 -->
     <tbody><tr>
       <td class="mobMargin">&nbsp;</td>
       <td align="center" width="600"><table width="100%" cellpadding="0" cellspacing="0" border="0">
           <tbody><tr>
             <td>&nbsp;</td>
             <td width="117" align="center"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/pp-logo.jpg" width="117" height="71" style="display:block;" border="0" alt="PayPal" title="PayPal"></td>
             <td>&nbsp;</td>
           </tr>
         </tbody></table></td>
       <td class="mobMargin">&nbsp;</td>
     </tr>
     <!-- end logo row 1 --> 
     <!-- logo row 2 / gradient w/circle -->
     <tr dir="LTR">
       <td class="mobMargin" align="center" valign="top" bgcolor="#004f9b"><!-- image scales to 100% --> 
         <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-left-top.jpg" width="100%" height="81" style="display:block;" border="0" alt=""></td>
       <td dir="LTR" align="center" width="600" bgcolor="#004f9b"><table width="100%" cellpadding="0" cellspacing="0" border="0" dir="LTR">
           <tbody><tr>
             <td width="12" align="center" valign="top"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-left-corner.jpg" width="12" height="81" style="display:block;" border="0" alt=""></td>
             <td align="center" valign="top"><!-- image scales to 100% --> 
               <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-left.jpg" width="100%" height="81" style="display:block;" border="0" alt=""></td>
             <td width="117" align="center" valign="top"><!-- circle image --> 
               <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-center-circle.jpg" width="100%" height="81" style="display:block;" border="0" alt=""></td>
             <td align="center" valign="top"><!-- image scales to 100% --> 
               <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-right.jpg" width="100%" height="81" style="display:block;" border="0" alt=""></td>
             <td width="12" align="center" valign="top"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-right-corner.jpg" width="12" height="81" style="display:block;" border="0" alt=""></td>
           </tr>
         </tbody></table></td>
       <td class="mobMargin" align="center" valign="top" bgcolor="#004f9b"><!-- image scales to 100% --> 
         <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-right-top.jpg" width="100%" height="81" style="display:block;" border="0" alt=""></td>
     </tr>
     <!-- end logo row 2 / gradient w/circle --> 
   <!-- main content row 3 -->
   <tr> 
     <!-- colored side bar -->
     <td class="mobMargin" align="left" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0">
         <tbody><tr>
           <td align="center" valign="top" bgcolor="#004f9b"><!-- image scales to 100% --> 
             <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-left-bottom.jpg" width="100%" height="96" style="display:block;" border="0" class="imgWidth10px" alt=""></td>
         </tr>
         <tr>
           <td bgcolor="#ffffff" align="right" valign="top"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/sidebar-gradient.png" width="1" height="100" style="display:block;" alt=""></td>
         </tr>
       </tbody></table></td>
     <!-- end colored side bar --> 
     <!-- BEGIN MAIN CONTENT -->
     <td width="600" valign="top" align="center">
         <table width="100%" cellpadding="0" cellspacing="0" border="0">
             <tbody><tr>
               <td align="center" valign="top" bgcolor="#ffffff" style="padding-top:20px;">
                   <!-- PLACE ALL MODS BELOW --> 
                     <!-- section header / adjust padding below to control spacing -->
   <table width="100%" cellpadding="0" cellspacing="0" border="0">
               <!-- PLACE ALL MODS BELOW --> 
               <!-- section header / adjust padding below to control spacing -->
               <tbody><tr>
                 <td align="center" style="padding:0px 30px 30px 30px;">
                 <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- primary headline 36/44 -->
                       <td align="center" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:36px; line-height:44px; color:#333333;" class="ppsans">Thank you for your payment to Overflow</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
          </tbody></table>  
                     <!-- end section header --> 
                     <!-- section subheadline / adjust padding below to control spacing -->
   <table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 30px 30px 30px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#777777;" class="ppsans">Here are the details about your automatic payment for 
                           <?php function subid($dbh,$userid){
                                $sql="SELECT * FROM subscription WHERE userid=:userid ";
                                $query=$dbh->prepare($sql);
                                $query->bindParam(':userid',$userid,PDO::PARAM_STR);
                                $query->execute();
                                $results=$query->fetch(PDO::FETCH_ASSOC);
                                if($query->rowCount()>0)
                                {
                                  return $results['planID'];

                                }

                           }

                           function sst($dbh,$userid){
                            $sql="SELECT * FROM subscription WHERE userid=:userid ";
                            $query=$dbh->prepare($sql);
                            $query->bindParam(':userid',$userid,PDO::PARAM_STR);
                            $query->execute();
                            $results=$query->fetch(PDO::FETCH_ASSOC);
                            if($query->rowCount()>0)
                            {
                              return date('F j, Y',strtotime($results['startTime']));

                            }

                            
                       }

                       function sst1($dbh,$userid){
                        $sql="SELECT * FROM subscription WHERE userid=:userid ";
                        $query=$dbh->prepare($sql);
                        $query->bindParam(':userid',$userid,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetch(PDO::FETCH_ASSOC);
                        if($query->rowCount()>0)
                        {
                          return date('F j, Y',strtotime($results['startTime']));

                        }

                        
                   }


                      

                       
                       function sid($dbh,$userid){
                        $sql="SELECT * FROM subscription WHERE userid=:userid ";
                        $query=$dbh->prepare($sql);
                        $query->bindParam(':userid',$userid,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetch(PDO::FETCH_ASSOC);
                        if($query->rowCount()>0)
                        {
                          return $results['subscriberID'];

                        }

                   }

                           function planname($dbh,$planID){
                            $sql="SELECT * FROM plans WHERE planID=:planID ";
                            $query=$dbh->prepare($sql);
                            $query->bindParam(':planID',$planID,PDO::PARAM_STR);
                            $query->execute();
                            $results=$query->fetch(PDO::FETCH_ASSOC);
                            if($query->rowCount()>0)
                            {
                              return $results['plan_name'];

                            }

                       }

                       function planp($dbh,$planID){
                        $sql="SELECT * FROM plans WHERE planID=:planID ";
                        $query=$dbh->prepare($sql);
                        $query->bindParam(':planID',$planID,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetch(PDO::FETCH_ASSOC);
                        if($query->rowCount()>0)
                        {
                          return $results['price'];

                        }

                   }

                  


                       echo planname($dbh,subid($dbh,$_SESSION['userid']));

                           
                           ?>.</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table>  
                     <!-- end section subheadline --><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- solid line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px solid #d6d6d6;">&nbsp;</td>
                       <!-- end solid line --> 
                     </tr>
                   </tbody></table>
               </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
     <!-- section subheadline / adjust padding below to control spacing -->
         <tr>
     <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 0px 10px 0px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#009cde;" class="ppsans">About your payment
                           </td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table></td>
         </tr>
       <!-- end section subheadline --> 
               <!-- transaction details / adjust padding below to control spacing -->
               <tr>
       <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:0px 0px 10px 0px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
                       <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:18px; color:#777777;" class="ppsans ">Subscription ID:&nbsp;<?php echo sid($dbh,$_SESSION['userid']);?></td>
                       <!-- end details copy --> 
                           <!-- details copy 13/22 -->
                       <td width="30%" align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:18px; color:#777777; padding-left:10px" class="ppsans padding0"><?php echo sst($dbh,$_SESSION['userid']);?></td>
                       <!-- end details copy --> 

                     </tr>
                   </tbody></table>
                  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
                     </tr>
                   </table>-->
                 </td>
         </tr>
       </tbody>
   </table></td>
               </tr>    
         <tr>
       <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="padding:10px 0px 10px 0px;">
   <tbody>
         <tr><td valign="top" width="70%">
       <table align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 20/22 -->
                       <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:20px; line-height:22px; color:#444444;" class="ppsans">Payment amount</td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
                 </td>
                 <td valign="top" width="30%" align="right">
                   <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- money total 20/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:20px; line-height:22px; color:#333333;" class="ppsans"><!--  topPadding10 -->$<?php $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</td>
                       <!-- end money total --> 
                     </tr>
                   </tbody></table>
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td bgcolor="#f5f5f5" align="center" style="padding:10px 0px 10px 0px;">
                   <table cellpadding="0" cellspacing="0" border="0" width="100%">
                     <!-- money total / row 1 -->
                     <tbody><tr> 
                       <!-- money total 17/24 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:24px; color:#333333; padding-bottom:10px;" class="ppsans textAlignLeft"><span style="font-weight:bold">Total amount of this transaction</span></td>
                       <!-- end money total --> 
                       <!-- money total 22/24 -->
                       <td width="40%" align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:24px; color:#333333; padding-left:30px; padding-bottom:10px;" class="ppsans autoWidth"><span style="font-weight:bold"><div id="aee646ec-2801-75c2-5e13-5d1881780aff">$<?php  $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</div></span></td>
                       <!-- end money total --> 
                     </tr>
                     <!-- end money total / row 1 --> 
                   </tbody></table>
              </td>
         </tr>
       </tbody>
   </table></td>
               </tr>  
               <!-- dotted line separator / adjust padding below to control spacing -->
               <tr>
       <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:10px 0px 10px 0px;">
       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- dotted line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px dotted #999999;">
                         <!--[if (IE)]>
           <img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/whiteSpacer.jpg" width="540" height="15" alt="" class="hide" style="display:block;"/>
           <![endif]-->&nbsp;
         </td>
                       <!-- end dotted line --> 
                     </tr>
                   </tbody></table>
      </td>
         </tr>
       </tbody>
   </table></td>
               </tr>
               <!-- end dotted line separator --> 
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
 <tr>
   <td align="center" style="padding:0px 0px 10px 0px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- body copy 17/22 -->
                       <td align="left" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#333333;" class="ppsans">You paid with</td>
                       <!-- end body copy --> 
                       <!-- spacer td to control text wrap - delete if not needed -->
                       <td width="30%" align="right" valign="top" class="hide">&nbsp;</td>
                       <!-- end spacer td - delete if not needed --> 
                     </tr>
                   </tbody></table>
           </td>
       </tr>
      </tbody>
   </table></td>
         </tr>
    <tr>
     <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:0px 0px 10px 0px;">
           <table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
 <tr>
   <td align="center" style="padding:0px 0px 10px 0px;">
                   <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
                       <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:18px; color:#777777;"><div id="27a55b1b-cf9a-43d1-afff-c6472f6398bf"><div style="display:block;" id="035fda4a-202e-360d-0b72-4200e870600d"><div style="display:block;" id="83c4d34d-dec0-4c4f-f92e-98a6ecfcb345"></div></div></div></td>
                       <!-- end details copy --> 

                        <!-- money total 22/24 -->
                       <td width="40%" align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:24px; color:#333333; padding-left:10px;" class="ppsans topPadding20">&nbsp;</td>
                       <!-- end money total --> 
                     </tr>
                   </tbody></table>
                  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
                     </tr>
                   </table> -->
          </td>
       </tr>
      </tbody>
   </table>                                                                           
           </td>
         </tr>
       </tbody>
   </table></td>
           </tr>
         <tr>
     <td align="center" style="padding:0px 30px 0px 30px;"><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td bgcolor="#f5f5f5" align="center" style="padding:10px 0px 10px 0px;">
                   <table cellpadding="0" cellspacing="0" border="0" width="100%">
                     <!-- money total / row 1 -->
                     <tbody><tr> 
                       <!-- money total 17/24 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:24px; color:#333333; padding-bottom:10px;" class="ppsans textAlignLeft"><span style="font-weight:bold">Payment to recipient</span></td>
                       <!-- end money total --> 
                       <!-- money total 22/24 -->
                       <td width="40%" align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:24px; color:#333333; padding-left:30px; padding-bottom:10px;" class="ppsans autoWidth"><span style="font-weight:bold">$<?php  $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</span></td>
                       <!-- end money total --> 
                     </tr>
                     <!-- end money total / row 1 --> 
                   </tbody></table>
              </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td bgcolor="#f5f5f5" align="center" style="padding:10px 0px 10px 0px;">
                   <table cellpadding="0" cellspacing="0" border="0" width="100%">
                     <!-- money total / row 1 -->
                     <tbody><tr> 
                       <!-- money total 17/24 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:24px; color:#333333; padding-bottom:10px;" class="ppsans textAlignLeft"><span style="font-weight:bold">Amount you'll pay</span></td>
                       <!-- end money total --> 
                       <!-- money total 22/24 -->
                       <td width="40%" align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:24px; color:#333333; padding-left:30px; padding-bottom:10px;" class="ppsans autoWidth"><span style="font-weight:bold">$<?php  $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</span></td>
                       <!-- end money total --> 
                     </tr>
                     <!-- end money total / row 1 --> 
                   </tbody></table>
              </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
       <tr>
     <td align="center" style="padding:0px 0px 10px 0px;">
     <!-- Text section Small -->
             <table width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody><tr> 
                 <!-- important info 15/20 -->
                 <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:18px; color:#777777; font-style:normal;" class="ppsans"><div style="display: block;" id="0b9b4fcd-cf96-5fa2-fa3e-f56edbbfef44"></div></td>
                 <!-- end important info --> 
               </tr>
             </tbody></table>
             <!-- end Text section Small --> 
          </td>
       </tr>
     </tbody>
 </table></td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:10px 30px 10px 30px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- solid line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px solid #d6d6d6;">&nbsp;</td>
                       <!-- end solid line --> 
                     </tr>
                   </tbody></table>
               </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
   <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- body copy 17/22 -->
                       <!-- Commenting attribute align=left from below td, default is left aligned and it causing rendering issue when the request is for RTL -->
                         <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#333333;" class="ppsans"><div style="display:block;" id="1b0d0f3b-9050-de41-c228-4e3d7b5df743">We covered your payment according to the <a href="https://www.paypal.com/webapps/mpp/ua/useragreement-full?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" islinktobetracked="True" style="text-decoration: none;" target="_BLANK">PayPal User Agreement</a>.</div></td>
                       <!-- end body copy --> 
                     </tr>
                   </tbody></table>
              </td>                                                              
     </tr>
     </tbody>
 </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:10px 30px 10px 30px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- solid line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px solid #d6d6d6;">&nbsp;</td>
                       <!-- end solid line --> 
                     </tr>
                   </tbody></table>
               </td>
         </tr>
       </tbody>
   </table><table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 30px 10px 30px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#009cde;" class="ppsans">Your next payment</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Next payment due:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">
                       
                       
                       
                       <?php $date = sst1($dbh,$_SESSION['userid']);
$date = date('Y-m-d', strtotime("last day of next month",strtotime($date)));
 

 echo date('F j, Y',strtotime($date)); 



//echo $date->modify('last day of next month');?></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Next payment amount:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">$<?php  $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:10px 30px 10px 30px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- solid line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px solid #d6d6d6;">&nbsp;</td>
                       <!-- end solid line --> 
                     </tr>
                   </tbody></table>
               </td>
         </tr>
       </tbody>
   </table><table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 30px 10px 30px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#009cde;" class="ppsans">Your automatic payment profile</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Subscription ID:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans"><?php echo sid($dbh,$_SESSION['userid']);?></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Payments from:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">&nbsp;<?php echo name($dbh,$_SESSION['userid'])?><br>&nbsp;<?php echo email($dbh,$_SESSION['userid'])?></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Payments to:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans"><p style="">Overflow<br>overflowgroup.ph@gmail.com</p></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Payments for:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">&nbsp;<?php echo planname($dbh,subid($dbh,$_SESSION['userid']));?></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Amount to be paid each time:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">$<?php  $p=planp($dbh,subid($dbh,$_SESSION['userid'])); echo number_format($p,2);?>&nbsp;USD</td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Billing cycle:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">Monthly</td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Payments start:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans"><?php echo sst($dbh,$_SESSION['userid']);?></td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
     <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tbody><tr> 
                       <!-- details copy 13/22 -->
     <td valign="top" class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#444444;">Payments stop after cycle:</td>
                       <!-- end details copy --> 
                       <!-- details copy 13/22 -->
                       <td align="right" valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:22px; line-height:22px; color:#333333; padding-left:10px;" class="ppsans">Until cancellation</td>
                       <!-- end details copy --> 
                     </tr>
                   </tbody></table>
  <!-- <table align="right" cellpadding="0" cellspacing="0" border="0" class="stackTbl">
                     <tr> 
</tr>
                   </table> -->
                </td>
         </tr>
       </tbody>
   </table><table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tbody>
         <tr>
     <td align="center" style="padding:10px 30px 10px 30px;">
                   <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- solid line -->
                       <td align="center" valign="top" style="font-size:0px; line-height:0px; border-bottom:1px solid #d6d6d6;">&nbsp;</td>
                       <!-- end solid line --> 
                     </tr>
                   </tbody></table>
               </td>
         </tr>
       </tbody>
   </table><table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 30px 10px 30px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#009cde;" class="ppsans">Overflow customer service</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
   <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- body copy 17/22 -->
                       <!-- Commenting attribute align=left from below td, default is left aligned and it causing rendering issue when the request is for RTL -->
                         <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#333333;" class="ppsans"><div style="display: block;" id="99c98c72-38fd-730b-4a12-ec248c299a91">Website: localhost/Overflow/views/index<br>Email: overflowgroup.ph@gmail.com

</div></td>
                       <!-- end body copy --> 
                     </tr>
                   </tbody></table>
              </td>                                                              
     </tr>
     </tbody>
 </table><table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr>
                 <td align="center" style="padding:0px 30px 10px 30px;">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tbody><tr> 
                       <!-- sub header 19/24 -->
                           <td align="center" style="vertical-align: top; padding: 0px 0px 0px 0px; font-family:Calibri, Trebuchet, Arial, sans serif; font-size:19px; line-height:24px; color:#009cde;" class="ppsans">Want to make a change?</td>
                       <!-- end primary headline --> 
                     </tr>
                   </tbody></table></td>
               </tr>
            </tbody></table><table width="100%" cellspacing="0" cellpadding="0" border="0">
 <tbody>
   <tr>
     <td align="center" style="padding:0px 30px 10px 30px;">
       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody><tr> 
                       <!-- body copy 17/22 -->
                       <!-- Commenting attribute align=left from below td, default is left aligned and it causing rendering issue when the request is for RTL -->
                         <td valign="top" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:17px; line-height:22px; color:#333333;" class="ppsans"><div style="display: block;" id="b7beef22-d223-18ed-da25-62f661320409"><div style="display: block;" id="f34e6185-9bae-389d-e39c-e9abc128c765"><div style="display: block;" id="9bdf9e64-e500-d95b-4973-acbd5c00940a">To change or cancel your automatic payment with&nbsp;Overflow, log in to your PayPal account, go to Profile, and choose Payments. Then click "Manage automatic payments".</div></div></div></td>
                       <!-- end body copy --> 
                     </tr>
                   </tbody></table>
              </td>                                                              
     </tr>
     </tbody>
 </table><!-- PLACE ALL MODS ABOVE -->
                   <!-- PLACE ALL MODS BELOW --><!-- PLACE ALL MODS ABOVE -->
         </td>
             </tr>
         </tbody></table>    
     </td>
     <!-- END MAIN CONTENT --> 

     <!-- colored side bar -->
     <td valign="top" align="left" class="mobMargin"><table width="100%" cellspacing="0" cellpadding="0" border="0">
         <tbody><tr>
           <td valign="top" bgcolor="#004f9b" align="center"><!-- image scales to 100% --><img width="100%" border="0" height="96" class="imgWidth10px" style="display:block;" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-right-bottom.jpg"></td>
         </tr>
         <tr>
           <td valign="top" bgcolor="#ffffff" align="left"><img width="1" height="100" style="display:block;" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/sidebar-gradient.png"></td>
         </tr>
       </tbody></table></td>
     <!-- end colored side bar --> 
   </tr>
   <!-- end - body content -->
 </tbody></table>   
 <!-- End Logo Header Standard --><!-- Footer Logo + Links -->
 <table cellpadding="0" cellspacing="0" border="0" width="100%" dir="LTR">
   <tbody><tr>
     <td class="mobMargin">&nbsp;</td>
     <td align="center" width="600"><table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tbody><tr>
           <td align="left" style="vertical-align: top; padding: 0px 0px 0px 0px;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody><tr>
                 <td width="12" align="center" valign="top"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/footer-left-corner.jpg" width="12" height="141" style="display:block;" border="0" alt=""></td>
                 <td align="center" valign="top"><!-- image scales to 100% --><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/footer-left-stroke.jpg" width="100%" height="141" style="display:block;" border="0" alt=""></td>
                 <td width="120" align="center" valign="top"><!-- circle image --><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/footer-pp-logo.jpg" width="120" height="141" style="display:block;" border="0" alt="PayPal"></td>
                 <td align="center" valign="top"><!-- image scales to 100% --><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/footer-right-stroke.jpg" width="100%" height="141" style="display:block;" border="0" alt=""></td>
                 <td width="12" align="center" valign="top"><img src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/footer-right-corner.jpg" width="12" height="141" style="display:block;" border="0" alt=""></td>
               </tr>
             </tbody></table>
             <table width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody><tr> 
                 <!-- copy 14px/18px -->
                 <td align="center" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:15px; line-height:22px;color:#444444;padding:20px" class="ppsans"><a href="https://www.paypal.com/selfhelp/home?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank" style="color:#0070ba; text-decoration:none;" alt="Help &amp; Contact">Help &amp; Contact</a> &nbsp;|&nbsp;
                     <a href="https://www.paypal.com/us/webapps/mpp/paypal-safety-and-security?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank" style="color:#0070ba; text-decoration:none;" alt="Security">Security</a> &nbsp;|&nbsp; 
                     <a href="https://www.paypal.com/cgp/app-redirect?intent=email_footer&amp;src=apps&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank" style="color:#0070ba; text-decoration:none;" alt="Apps">Apps</a></td><!-- end copy --> 
               </tr>
             </tbody></table>
             </td>
         </tr>
       </tbody></table></td>
     <td class="mobMargin">&nbsp;</td>
   </tr>
 </tbody></table>
 <!-- end Footer Logo + Links --> 
<!-- Footer Social Links -->
 <table width="100%" cellpadding="0" cellspacing="0" border="0">
   <tbody><tr>
     <td align="center" style="padding-bottom:20px;"><table align="center" cellpadding="0" cellspacing="0" border="0">
         <tbody><tr>
             <td align="left" valign="middle" style="padding: 0px 25px 0px 0px;"><a href="https://twitter.com/PayPal?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank"><img border="0" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/icon-tw.jpg" width="28" height="29" style="display:block" alt="twitter"></a></td>
             <td align="left" valign="middle" style="padding: 0px 25px 0px 0px;"><a href="https://www.instagram.com/paypal/?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank"><img border="0" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/icon-ig.jpg" width="28" height="29" style="display:block" alt="instagram"></a></td>
             <td align="left" valign="middle" style="padding: 0px 25px 0px 0px;"><a href="https://www.facebook.com/PayPalUSA?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank"><img border="0" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/icon-fb.jpg" width="28" height="29" style="display:block" alt="facebook"></a></td>
             <td align="left" valign="middle" style="padding: 0px 25px 0px 0px;"><a href="http://www.linkedin.com/company/1482?trk=tyah&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank"><img border="0" src="https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/icon-li.jpg" width="28" height="29" style="display:block" alt="linkedin"></a></td>
         </tr>
       </tbody></table></td>
   </tr>
 </tbody></table>
 <!--end Footer Social Links --><!-- Footer Text Module -->
 <table cellpadding="0" cellspacing="0" border="0" width="100%">
   <tbody><tr>
     <td class="hide">&nbsp;</td>
     <td align="center" width="600" valign="top">
       <table width="100%" cellpadding="0" cellspacing="0" border="0">
         <tbody><tr><td style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:20px 30px 30px 30px;" class="ppsans">&nbsp;</td>
           <!-- end copy --> 
         </tr>
       </tbody></table>
      </td>
     <td class="hide">&nbsp;</td>
   </tr>
 </tbody></table>
 <!-- End Footer Text Module --><table cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody><tr>
 <td class="hide">&nbsp;</td>
   <td align="center" width="600">
     <table width="100%" cellpadding="0" cellspacing="0" border="0">
     <tbody><tr> 
                 <td class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:20px 30px 30px 30px;">
                    <span><p> PayPal is committed to preventing fraudulent emails. Emails from PayPal will always contain your full name. <a href="https://www.paypal.com/us/webapps/mpp/security/suspicious-activity?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" target="_blank" style="color:#009cde; text-decoration:none;">Learn to identify phishing</a></p></span>
                 </td>
     </tr>
       </tbody></table>
  </td>
  <td class="hide">&nbsp;</td>
</tr>
</tbody></table><!-- TEMPLATE: FOOTER -->
             <table cellpadding="0" cellspacing="0" border="0" width="100%">
       <tbody><tr>
         <td class="hide">&nbsp;</td>
         <td align="center" width="600"><table width="100%" cellpadding="0" cellspacing="0" border="0">
             <tbody><tr> 
                <!-- <td style="padding:19px 29px; font-family:HelveticaNeueLight,HelveticaNeue-Light,'Helvetica Neue Light',HelveticaNeue,Helvetica,Arial,sans-serif;  -webkit-font-smoothing: antialiased; font-size:11px; color:#666; text-align:left;"><span id="footerContent">Footer content will go here.</span></td>-->
                <td class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:20px 30px 30px 30px;"> 
                   <span><p> Please don't reply to this email. To get in touch with us, click <strong><a href="https://www.paypal.com/selfhelp/home?utm_source=unp&amp;utm_medium=email&amp;utm_campaign=PPC001335&amp;utm_unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" style="text-decoration:none;" target="_BLANK">Help &amp; Contact</a></strong>.</p></span>
                </td>
</tr>
           </tbody></table></td>
         <td class="hide">&nbsp;</td>
       </tr>
     </tbody></table><table cellpadding="0" cellspacing="0" border="0" width="100%">
       <tbody><tr>
           <td class="hide">&nbsp;</td>
           <td align="center" width="600">
             <table width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody><tr> 
                 <td class="ppsans" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:20px 30px 30px 30px;">
                    <span><p> PayPal Customer Service can be reached at 888-221-1161.</p></span>
                 </td>
               </tr>
             </tbody></table>
          </td>
          <td class="hide">&nbsp;</td>
       </tr>
     </tbody></table><!-- Start - EmailConfirmation Footer -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
 <td class="hide">&nbsp;</td>
 <td align="center" width="600">
     <table width="100%" cellpadding="0" cellspacing="0" border="0">
       <tbody><tr> 
         <!-- copy 13px/20px -->
         <td style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:0px 30px;" class="ppsans">
               
         </td>
         <!-- end copy --> 
       </tr>
     </tbody></table>
 </td>
 <td class="hide">&nbsp;</td>
</tr>
</tbody></table>
<!-- End - EmailConfirmation Footer -->
 <!-- Copyright Module -->
     <table cellpadding="0" cellspacing="0" border="0" width="100%">
       <tbody><tr>
         <td class="hide">&nbsp;</td>
         <td align="center" width="600"><table width="100%" cellpadding="0" cellspacing="0" border="0">
             <tbody><tr> 
               <!-- copy 13px/20px -->
               <td style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999; padding:20px 30px 30px 30px;" class="ppsans"><table border="0" cellpadding="0" cellspacing="0" id="emailFooter" width="100%" style="font-family:Calibri, Trebuchet, Arial, sans serif; font-size:13px; line-height:20px;color:#999999;" class="ppsans"><tbody><tr><td><p>Copyright ?? 1999-2021 PayPal, Inc. All rights reserved. PayPal is located at 2211 N. First St., San Jose, CA 95131.</p><p class="footer ppid">PayPal PPC001335:en_US(en_US):1.61:ccg18contentserv8089:8a5e96b4fdf8</p></td></tr></tbody></table>
<img src="https://www.msmaster.qa.paypal.com/webapps/tracking/ts?v=1&amp;ppid=PPC001335&amp;cnac=US&amp;rsta=en_US&amp;cust=QMGP3T9K7Q8T6&amp;unptid=72e3e678-0191-11ed-8e3a-42010a60e373&amp;calc=8a5e96b4fdf8&amp;unp_tpcid=recurringpayment-payment-success-buyer-email&amp;page=main:email:PPC001335:::&amp;pgrp=main:email&amp;e=op&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;xt=105279&amp;unp_adv=false" alt="" height="1" width="1" border="0">
<p></p> 
               </td>
               <!-- end copy --> 
             </tr>
           </tbody></table></td>
         <td class="hide">&nbsp;</td>
       </tr>
     </tbody></table>
     <!-- Copyright Module --> 
   <!-- end inner container / place all modules above -->
   </td>
   <td bgcolor="#ffffff" class="mobMargin" style="font-size:0px;">&nbsp;
   </td>
</tr>
<!-- END WHITE BACKGROUND -->
</tbody></table>
<!-- END CONTAINER -->

</body></html>
						<!--begin::Logo-->
						<h1 class="fw-bolder fs-2qx text-gray-800 mb-7"><//?php echo $_GET['status']?></h1>
						<!--end::Logo-->

						
						
						<!--begin::Message-->
						<div class="fs-3 fw-bold text-muted mb-10">

						
						<a href="#" class="link-primary fw-bolder"></a>
						<br /></div>

						<!--end::Message-->
						<!--begin::Action-->
						
						<div class="text-center mb-10" >
							<a type="submit" href="home" class="btn btn-lg btn-primary fw-bolder">Go Home</a>
						</div>
						<!--end::Action-->
						<!--begin::Action-->
					
						<!--end::Action-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/17.png"></div>
					<!--end::Illustration-->
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
			<!--end::Authentication - Signup Verify Email-->
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
	</body>
	<!--end::Body-->
</html>