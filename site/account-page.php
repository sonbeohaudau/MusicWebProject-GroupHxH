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
<body id="page6">
	<?php
	$_SESSION["mode"] = 5;
	if(isset($_POST["username"]) && isset($_POST["pass"]) && isset($_POST["submit"])){
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		$submit = $_POST["submit"];
	}else{
		$username = null;
		$pass = null;
		$submit = null;
	}
	?>
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>

<!--
<div class="container aligncenter">
	<ul>
		<li><?php echo $submit ?></li>
		<li><?php echo $username ?></li>
		<li><?php echo hash('sha256',$pass) ?></li>
	</ul>
</div>
-->

<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
