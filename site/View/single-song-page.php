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
<link rel="stylesheet" href="css/breadcrumb.css" type="text/css" media="all">
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
include('../Controller/C_Song.php');
$songcontroller = new Ctrl_Song();
$songList = $songcontroller->invoke();
$listLength = count($songList);
$singleSong = $songcontroller->getSingleSong($_GET['SongID']);
?>
<body id="page5">
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
         <h2>Latest MV</h2>
         <ul class="mv list1">
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $songList[$listLength-3]->getSongImage(); ?>"></a>
				<?php echo $songList[$listLength-3]->getSongTitle(); ?><br>
				<?php echo $songList[$listLength-3]->getGenre(); ?>
			 </li><br>
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $songList[$listLength-3]->getSongImage(); ?>"></a>
				<?php echo $songList[$listLength-2]->getSongTitle(); ?><br>
				<?php echo $songList[$listLength-2]->getGenre(); ?>
			 </li><br>
			<li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $songList[$listLength-3]->getSongImage(); ?>"></a>
				<?php echo $songList[$listLength-1]->getSongTitle(); ?><br>
				<?php echo $songList[$listLength-1]->getGenre(); ?>
			 </li><br>
         </ul>
      </div>
   </aside>
   <!-- content -->
   <section id="content">
	   <ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="song-page.php">Song</a></li>
		  <li><?php echo $singleSong->getSongTitle(); ?></li>
		</ul>
      <audio width="100%" height="100%" src="song/<?php echo $songList[0]->getAudioLink(); ?>" controls>
   </section>
   <div class="clear"></div>
</div></div>
<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
