<!DOCTYPE html>
<html lang="en">
<head>
<title>Site Map - Site Map | Music - Free Website Template from Templates.com</title>
	<link rel = "icon" href ="images/hxh-logo.png" type = "image/x-icon">
<meta charset="utf-8">
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/ITC_Busorama_500.font.js"></script>
<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, header nav ul li, header nav ul li a, h1 a');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
	<?php
	if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	$_SESSION["mode"] = 5;
	?>
<?php
//if(!isset($_POST['submit'])) die('');
include('../connection.php');
include('../Controller/C_Account.php');
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['submit'])){
$controller = new Ctrl_Account();
$username = $_POST['username'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];
if($submit == 'Sign Up'){
	$controller->signupAction($username,$pass);
}
if($submit == 'Sign In'){
	$controller->signinAction($username,$pass);
}
}
?>
<body id="page6">
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>
<div class="container">
   <!-- aside -->
   <aside>
      <?php include 'admin.php'; ?>
	   <?php echo $_SESSION['logedName']; ?>
   </aside>
   <!-- content -->
   <section id="content">
      <?php include 'adminSection.php';?>
   </section>
   <div class="clear"></div>
</div></div>


<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
