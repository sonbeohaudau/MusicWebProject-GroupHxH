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
<?php
include('../connection.php');
include('../Controller/C_MV.php');
$mvcontroller = new Ctrl_MV();
$MVList = $mvcontroller->invoke();
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
         <ul class="mv"q>
            <li><img src="images/<?php end($MVList); ?>"><?php echo end($MVList)->getMVID(); ?></li>
            <li><a href="#">June 14, 2010</a><strong>Neque porro quisquam est</strong>Consequuntur magni dolores eos qughi ratione voluptatem sequi.</li>
            <li><a href="#">May 29, 2010</a><strong>Minima veniam, quis nostrum</strong>Ut enim ad minima veniam, quis nosrum exercitatnem ullam corporis.</li>
         </ul>
      </div>
   </aside>
   <!-- content -->
   <section id="content">
      <h2>Contact Form</h2>
      <form id="contacts-form" action="">
         <fieldset>
         <div class="field">
            <label>Your Name:</label>
            <input type="text">
         </div>
         <div class="field">
            <label>Your E-mail:</label>
            <input type="email">
         </div>
         <div class="field">
            <label>Your Website:</label>
            <input type="text">
         </div>
         <div class="field">
            <label>Your Message:</label>
            <textarea cols="1" rows="1"></textarea>
         </div>
         <div class="button"><strong><span><a href="#" onClick="document.getElementById('contacts-form').submit()">Send Your Message!</a></span></strong></div>
         </fieldset>
      </form>
   </section>
   <div class="clear"></div>
</div></div>
<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
