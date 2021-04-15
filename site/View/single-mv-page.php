<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us - Contact Us | Music - Free Website Template from Templates.com</title>
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
<style>
/* Style the list */
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: transparent;
  border-radius: 5px;
}

/* Display list items side by side */
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

/* Add a slash symbol (/) before/behind each list item */
ul.breadcrumb li+li:before {
  padding: 8px;
  color: whitesmoke;
  content: "/\00a0";
}

/* Add a color to all links inside the list */
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}

/* Add a color on mouse-over */
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}	
</style>
<?php
include('../connection.php');
include('../Controller/C_MV.php');
$mvcontroller = new Ctrl_MV();
$MVList = $mvcontroller->invoke();
$listLength = count($MVList);
$singleMV = $mvcontroller->getSingleMV($_GET['MVID']);
?>
<body id="page5">
	<?php 
	if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	$_SESSION["mode"] = 4; ?>
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>
<div class="container">
   <!-- aside -->
   <aside>
      <div class="inside">
         <h2>Latest MV</h2>
         <ul class="mv list1">
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $MVList[$listLength-3]->getMVImage(); ?>"></a>
				<?php echo $MVList[$listLength-3]->getMVTitle(); ?><br>
				<?php echo $MVList[$listLength-3]->getMVLink(); ?>
			 </li><br>
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $MVList[$listLength-2]->getMVImage(); ?>"></a>
				<?php echo $MVList[$listLength-2]->getMVTitle(); ?><br>
				<?php echo $MVList[$listLength-2]->getMVLink(); ?>
			 </li><br>
			<li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $MVList[$listLength-1]->getMVImage(); ?>"></a>
				<?php echo $MVList[$listLength-1]->getMVTitle(); ?><br>
				<?php echo $MVList[$listLength-1]->getMVLink(); ?>
			 </li><br>
         </ul>
      </div>
   </aside>
   <!-- content -->
   <section id="content">
	   <ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="mv-page.php">MV</a></li>
		  <li><?php echo $singleMV->getMVTitle(); ?></li>
		</ul>
      <video width="100%" height="100%" src="video/<?php echo $MVList[0]->getMVLink(); ?>" controls>
   </section>
   <div class="clear"></div>
</div></div>
<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
