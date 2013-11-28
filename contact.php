<?php include("config.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dreams Never Die | By the dream factory</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="images/favicon.ico">
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
<?php include_once("analyticstracking.php") ?>
<!--Google Analytics-->
<div id="head">
 <div id="head_cen">
  <div id="head_sup" class="head_pad">
   <p class="search">
    <label>SEARCH</label>
    <input name="search" type="text" class="txt" />
    <input name="search-btn" type="submit" class="btn" value="SEARCH" />
   </p>
    <h1 class="logo"><a href="index.php">Dreams Never Die | By the dream factory</a></h1>
    <ul>
     <li><a  href="index.php">Home</a></li>
     <li><a href="about.php">ABOUT</a></li>
     <li><a href="registration.php">REGISTER</a></li>
     <li><a class="active" href="contact.php">CONTACT</a></li>
   </ul>
   
  </div>
 </div>
</div>
<div id="content">
 <div id="content_cen">
  <div id="content_sup" class="head_pad">
   <div id="welcom_pan">
   <?php
   $res = mysql_fetch_array( mysql_query("select * from dnd_info"));
//   var_dump($res);

   
   ?>
   
    <h2>Dreams Never Die | By the dream factory Contact</h2>
    <p>A small strange initiative because of being guilt for being able to learn from my teachers what others cannot learn.</p>
    <!--<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=56%2F50,+4th+St,+Teachers+Guild+Colony,+rajaji+nagar+extn,+villivakkam,+chennai+600049&amp;aq=&amp;sll=13.122071,80.207212&amp;sspn=0.006781,0.005751&amp;ie=UTF8&amp;hq=&amp;hnear=4th+Main+Rd,+Villivakkam,+Chennai,+Tamil+Nadu&amp;ll=13.107879,80.203239&amp;spn=0.001695,0.001438&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=56%2F50,+4th+St,+Teachers+Guild+Colony,+rajaji+nagar+extn,+villivakkam,+chennai+600049&amp;aq=&amp;sll=13.122071,80.207212&amp;sspn=0.006781,0.005751&amp;ie=UTF8&amp;hq=&amp;hnear=4th+Main+Rd,+Villivakkam,+Chennai,+Tamil+Nadu&amp;ll=13.107879,80.203239&amp;spn=0.001695,0.001438&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>-->
   </div>
   <div class="lftWrap">
    <h3><span>Corporate</span> Address</h3>
	
    <p><?php echo $res[addr1]; ?>, <br />
	<?php echo $res[addr2]; ?>, <br />
	<?php echo $res[addr3]; ?><br />
	<?php echo $res[city]." - ". $res[zip];  ?>,  <br /> 
	<?php echo $res[state]; ?><br />
	
	<?php echo "<b>Phone :</b>".$res[phone]; ?><br />
	<?php echo $res[email]; ?></p>
    </div>
    
	<div class="rgtWrap"> 
    <h3><span>Quick</span> Contact</h3>
	<form method="post" action="" > 
    <input name="name" type="text" class="txt" value="Name" onfocus="if (this.value==this.defaultValue) this.value = ''"; onblur="if (this.value=='') this.value = this.defaultValue"; /> 
    <input name="email" type="email" class="txt" value="Email-ID" onfocus="if (this.value==this.defaultValue) this.value = ''"; onblur="if (this.value=='') this.value = this.defaultValue";/> 
    <input name="submit" type="submit" class="btn" value="submit" />
	
<?php 
if($_POST['submit'])
{
	
  	include("config.php");
    // Your code here to handle a successful verification	
	$qr = mysql_query("INSERT INTO `q_contact` (`name` ,`email`)VALUES ('$_POST[name]', '$_POST[email]')");
//INSERT INTO `q_contact` (`name` ,`email`)VALUES ('$_POST[name]', '$_POST[email]');	
	if($qr){
	
	$to = $_POST['email'];
$subject='Thank you for your interest';
$message='<html><body><table cellpadding="5" cellspacing="5">
<tr><td><b>Message: </b></td><td> Dear '.$_POST['name'].', <br> Thank you for your interest in project DND. One of our representative will contact you soon on this email.</td></tr>
</table></center></body></html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: dnd.tdf@gmail.com" . "\r\n";

if(mail($to,$subject,$message,$headers))
	 echo "<script> alert('Thank you for your interest!\\n Your request has been submitted successfully! \\n One of our representative will contact you soon'); </script>";
	 }
}
?>
    </div>
  </div>
 </div>
</div>
<div id="foot">
 <div id="foot_cen">
 <!--<h6><a href="index.php">Dreams Never Die | By the dream factory</a></h6>-->
 <ul>
     <li><a href="index.php">Home</a></li>
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
