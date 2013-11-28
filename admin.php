<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dreams Never Die | Admin</title>
<link rel="shortcut icon" href="images/favicon.ico">

</head>

<body>
test admin page
<?php
$conn = ftp_connect("www3.subdomain.com") or die("Could not connect");
ftp_login($conn,"user2601583","Karthykn3!");
ftp_close($conn);
echo '<script> window.location = "http://www.website.org/"; </script>';

?> 
</body>
</html>
