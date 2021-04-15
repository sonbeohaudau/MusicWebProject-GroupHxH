<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us - About Us | Music - Free Website Template from Templates.com</title>
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
<body id="page2">
	<?php 
	if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	$_SESSION["mode"] = 2; ?>
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>
<div class="container">
   <!-- aside -->
   <aside>
      <div class="inside">
         <h2>Latest News</h2>
         <ul class="news">
            <li><a href="#">June 30, 2010</a><strong>Sed ut perspiciatis unde</strong>Omnis iste natus luptatem accusantium doloremque laudantium totamrem.</li>
            <li><a href="#">June 14, 2010</a><strong>Neque porro quisquam est</strong>Consequuntur magni dolores eos qughi ratione voluptatem sequi.</li>
            <li><a href="#">May 29, 2010</a><strong>Minima veniam, quis nostrum</strong>Ut enim ad minima veniam, quis nosrum exercitatnem ullam corporis.</li>
         </ul>
      </div>
   </aside>
   <!-- content -->
   <section id="content">
      <h2>About Your Website</h2>
      <p class="p2"><span class="txt1">Sed ut perspiciatis unde omnis</span> iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui rationeue porro quisquam est.</p>
      <h2 class="indent">About Your Team</h2>
      <ul class="list1">
         <li><img src="images/2page-img1.jpg"><strong>Team Member One</strong>He is the most important member of your team. Usually this is the person who started the website. Maybe it is worth to write why he has made such a decision and what has inspired him.</li>
         <li><img src="images/2page-img2.jpg"><strong>Another Team Member</strong>We are completly lost on what he's responsible for, but we hope that you know it ;) We also hope that you will tell it to the rest of the world including us by placing some real text here.</li>
      </ul>
   </section>
   <div class="clear"></div>
</div></div>
<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
