<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dreams Never Die | By the dream factory</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<!--  STEP ONE: insert path to SWFObject JavaScript -->
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<link rel="shortcut icon" href="images/favicon.ico">
<script type="text/javascript" src="js/view.js"></script>
<!--  STEP TWO: configure SWFObject JavaScript and embed CU3ER slider -->
<script type="text/javascript">
		var flashvars = {};
		flashvars.xml = "config.xml";
		flashvars.font = "font.swf";
		var attributes = {};
		attributes.wmode = "transparent";
		attributes.id = "slider";
		swfobject.embedSWF("cu3er.swf", "cu3er-container", "800", "360", "9", "expressInstall.swf", flashvars, attributes);
</script>
</head>

<body>
<!--Google tracking-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45609680-1', 'website.org');
  ga('send', 'pageview');

</script>
<!--Google tracking-->
<?php 
include("config.php");
?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N38J59"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N38J59');</script>
<!-- End Google Tag Manager -->
<!--Google Analytics-->
<?php 
error_reporting(0);
include_once("analyticstracking.php") ?>
<!--Google Analytics-->
   <!-- FACEBOOK LIKE BUTTON -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=167827286743490";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   <!-- FACEBOOK LIKE BUTTON -->
   <!--LOGO, SEARCH, MENUS -->
<div id="head">
 <div id="head_cen">
  <div id="head_sup" class="head_pad">
  <!--<img src="images/bannerBg.png" alt="" class="ban_bg" /> -->
   <p class="search">
    <label>SEARCH</label>
    <input name="search" type="text" class="txt" />
    <input name="search-btn" type="submit" class="btn" value="SEARCH"  />
   </p>
   
    <h1 class="logo"><a href="index.php">Dreams Never Die| By the dream factory</a></h1>
	
    <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a class="active" href="registration.php">REGISTER</a></li>
     <li><a href="contact.php">CONTACT</a></li>
   </ul>
  
   
  </div>
 </div>
</div>
   <!--LOGO, SEARCH, MENUS -->
<div id="content_cen">
  <div id="content_sup">
   <!--<div id="ct_pan">
 
   </div> -->
   <!--captcha theme selection-->
   <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean',
    custom_theme_widget: 'recaptcha_widget'
 };
 </script>
    <!--captcha theme selection-->
	
  </div>
 </div>
</div>



	<div id="content"> 
	<div id="content_cen">
		<h2><a>Become a volunteer</a></h2>
		<form id="form_743562" class="appnitro"  method="post" action="">
					<div class="form_description">
<small>Start where you are. Use what you have. Do what you can.</small>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="name" name= "name" class="element text" maxlength="255" value=""/>
			
		</span>
		
		</span><p class="guidelines" id="guide_1"><small>Enter your full name</small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Gender </label>
		<span>
			<input id="gender" name="gender" class="element radio" type="radio" value="male" checked="checked" />
<label class="choice" for="element_7_1">Male</label>
<input id="gender" name="gender" class="element radio" type="radio" value="female" />
<label class="choice" for="element_7_2">Female</label>
<input id="gender" name="gender" class="element radio" type="radio" value="other" />
<label class="choice" for="element_7_3">Other</label>

		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="email" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Please enter a valid email address</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="phone">Phone </label>
		<div>
			<input id="phone" name="phone" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Your phone number with country code.</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Address </label>
		
		<div>
			<input id="addr1" name="addr1" class="element text large" value="" type="text">
			<label for="element_4_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_4_2" name="addr2" class="element text large" value="" type="text">
			<label for="element_4_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="city" name="city" class="element text medium" value="" type="text">
			<label for="element_4_3">City</label>
		</div>
	
		<div class="right">
			<input id="state" name="state" class="element text medium" value="" type="text">
			<label for="element_4_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_4_5" name="zip" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_4_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_4_6" name="country"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_4_6">Country</label>
	</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Area of Expertise </label>
		<div>
			<input id="element_5" name="aoif" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Please enter the name of the field or subject you are a certified/non-certified professional and willing to teach.</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">A Little more about yourself </label>
		<div>
			<textarea id="element_6" name="desc" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_6"><small>Tell us a little more about yourself</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="743562" />
			    
				<div class="rgtWrap"> <input id="saveForm" class="btn" type="submit" name="submit" value="Submit" onclick="return validate();" />
		</li></div>
			</ul>
		</form>	
		
	</div>
	<script type="text/javascript">
	function validate()
	{
		if(document.getElementById('name').value=='')
		{
			alert("Enter the Name Field mandatory");
			document.getElementById('name').focus();
			return false;
		}
		/*else if(document.getElementById('gender').checked==False)
		{
			alert("Select Your Gender Field mandatory");
			document.getElementById('gender').focus();
			return false;
		}*/
		else if(document.getElementById('email').value=='')
		{
			alert("Enter the Email Field mandatory");
			document.getElementById('email').focus();
			return false;
		}
		else if(document.getElementById('phone').value=='')
		{
			alert("Enter the Phone Field mandatory");
			document.getElementById('phone').focus();
			return false;
		}
		else if(document.getElementById('addr1').value=='')
		{
			alert("Enter the Address Line1 Field mandatory");
			document.getElementById('addr1').focus();
			return false;
		}
		else
		return true;
	}
	</script>
<div id="foot">
 <div id="foot_cen">
<ul>
     <li><a href="index.php">HOME</a></li>
     <li class="space">|</li>
     <li><a href="about.php">ABOUT</a></li>
     <li class="space">|</li>
     <li><a href="registration.php">REGISTER</a></li>
     <li class="space">|</li>
     <li><a class="active" href="contact.php">CONTACT</a></li>
    </ul>
    <p>© Yet to register trademark <a href="registration.php" >Become a volunteer</a></p>
 </div>
</div>
</body>
</html>


<?php 
if($_POST['submit'])
{
	
  	include("config.php");
    // Your code here to handle a successful verification	
	$qr = mysql_query("INSERT INTO `register`( `name`, `gender`,`addr1`, `addr2`, `city`, `state`, `country`, `phone`, `email`, `zip`, `aoif` , `desc`) VALUES ('$_POST[name]','$_POST[gender]','$_POST[addr1]','$_POST[addr2]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[phone]','$_POST[email]','$_POST[zip]','$_POST[aoif]','$_POST[desc]')");
	
	if($qr){
	
	$to = $_POST['email'];
$subject='Thank you for registering with the dream factory';
$message='<html><body>Dear '.$_POST['name'].',<br>
Thank you for your interest in project DND. One of our representative will contact you soon on this email. <br> Please check the correctness of the information provided by you
<table cellpadding="5" cellspacing="5">
<tr><td><b>Name:</b></td><td> '.$_POST['name'].' </td></tr>
<tr><td><b>Phone No:</b></td><td>'.$_POST['phone'].'</td></tr>
<tr><td><b>Email Id:</b></td><td>'.$_POST['email'].'</td></tr>
<tr><td><b>Area of Expertise :</b></td><td>'.$_POST['aoif'].'</td></tr>
</table></center>Thanks & Regards,<br> Karthikeyan.M | Founder<br> The Dream Factory <br> Project DND(Dreams Never Die)</body></html>';


$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: dnd.tdf@gmail.com" . "\r\n";


if(mail($to,$subject,$message,$headers))

	 echo "<script> alert('Thank you for your interest!\\n You are successfully registered as a volunteer. Our team will get back to you soon.'); </script>";
	 echo '<script> window.location = "index.php"; </script>';
	 }


}

?>
