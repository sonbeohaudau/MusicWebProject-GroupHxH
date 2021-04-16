<!DOCTYPE html>
<html lang="en">
<head>
<title>Song Page | HXH Group</title>
	<link rel = "icon" href ="images/hxh-logo.png" type = "image/x-icon">
<meta charset="utf-8">
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/pagination.css" type="text/css" media="all">
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
include('../Controller/C_Song.php');
$songcontroller = new Ctrl_Song();
$songList = $songcontroller->invoke();
$listLength = count($songList);
	
//define total number of results you want per page
$result_per_page = 5;
	
//determine the total number of pages available  
$number_of_page = ceil($listLength/$result_per_page);

//determine which page number visitor is currently on  
if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}
$songPagList = $songcontroller->getPaginationResult($page, $result_per_page);
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
         <h2>Latest Song</h2>
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
	   <div>
	   <?php
	   for($i=0;$i<count($songPagList);$i++){
		   echo '<a href=\'single-song-page.php?SongID='.$songPagList[$i]->getSongID().'\'>'.$songPagList[$i]->getSongTitle().'</a>';
		   echo '<br>';
	   }
	   ?>
	   </div>
	   <br>
	   
   </section>
	<div class="pagination">
		<?php //display pagination list bar << 1 2 3 >>
	   $pagLink = "";
	   if($page>=2){   
            echo "<a href='song-page.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$number_of_page; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='song-page.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='song-page.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$number_of_page){   
            echo "<a href='song-page.php?page=".($page+1)."'>  Next </a>";   
        }   
	   ?>
	   </div>
   <div class="clear"></div>
</div></div>
<!-- footer -->
<?php include "./footer.html" ?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
