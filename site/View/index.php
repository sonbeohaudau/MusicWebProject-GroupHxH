<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page | HXH Group</title>
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
<script type="text/javascript" src="js/index.js"></script>
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
<body id="page1">
<?php
	session_start();
	$_SESSION["mode"] = 1;
?>
<div class="wrap">
   <!-- header -->
	<?php include "./header.php" ?>
	
   <div class="container">
      <!-- aside -->
      <aside>
	<?php include('./log-form.php'); ?>
      </aside>
      <!-- content -->
      <section id="content">
         <div class="wrapper">
            <article class="col-1">
               <h2>Introduction</h2>
               <img src="images/1page-img.jpg">
               <p class="p1">Music Beats Site is a web modified by <span class="txt1">HxH group</span> from template provided by <span class="txt1">TemplateMonster.com</span> team.</p>
               <p class="p0">This website provide entertainment-purpose features such as listening to music, bla blo bla blo bla blo ai chém gió hộ cái :3.</p>
            </article>
            <article class="col-2">
               <h2>Group Members</h2>
               <ul class="list">
                  <li><strong>Tran Phi Hung</strong>ICT 03<br>20176774<br><a href="#"><img src="images/arrow.gif"></a></li>
                  <li><strong>Nguyen Tri Hung</strong>ICT 04<br>20176860<br><a href="#"><img src="images/arrow.gif"></a></li>
                  <li><strong>Le Thanh Son</strong>ICT 03<br>2017????<br><a href="#"><img src="images/arrow.gif"></a></li>
                  <li><strong>Dao Hong Quan</strong>ICT 04<br>2017????<br><a href="#"><img src="images/arrow.gif"></a></li>
               </ul>
            </article>
         </div>
      </section>
      <div class="clear"></div>
   </div>
</div>
<!-- footer -->
<?php include "footer.html" ?>
	
<!--<script type="text/javascript"> Cufon.now(); </script>-->
</body>
</html>
