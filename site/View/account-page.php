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
	if(isset($_POST["username"]) && isset($_POST["pass"])){
		$username = $_POST["username"];
		$pass = $_POST["pass"];
	}else{
		$username = null;
		$pass = null;
	}
	?>
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>
<div hidden class="container">
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
      <h2>Site Map</h2>
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
      <ul class="sitemap">
         <li><a href="index.html">Home Page</a></li>
         <li><a href="about-us.html">About Us</a></li>
         <li><a href="articles.html">Articles</a>
            <ul>
               <li><a href="article.html">Article 1</a></li>
               <li><a href="article.html">Article 2</a></li>
               <li><a href="article.html">Article 3</a></li>
            </ul>
         </li>
         <li><a href="contact-us.html">Contact Us</a></li>
         <li><a href="sitemap.html">Site Map</a></li>
      </ul>
      <p class="p0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
   </section>
   <div class="clear"></div>
</div></div>
<div class="container aligncenter">
	<ul>
		<li><?php echo $_POST["submit"] ?></li>
		<li><?php echo $username ?></li>
		<li><?php echo hash('sha256',$pass) ?></li>
	</ul>
</div>

<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
