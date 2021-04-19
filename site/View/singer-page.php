<!DOCTYPE html>
<html lang="en">
<head>
<title>Singer Page | HXH Group</title>
	<link rel = "icon" href ="images/hxh-logo.png" type = "image/x-icon">
<meta charset="utf-8">
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/pagination.css" type="text/css" media="all">
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
include('../Controller/C_Singer.php');
$singercontroller = new Ctrl_Singer();
$singerList = $singercontroller->invoke();
$listLength = count($singerList);
	
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
$singerPagList = $singercontroller->getPaginationResult($page, $result_per_page);
?>
<body id="page5">
	<?php 
	if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	$_SESSION["mode"] = 3; ?>
<div class="wrap"><!-- header -->
<?php include "./header.php" ?>
<div class="container">
   <!-- aside -->
   <aside>
      <div class="inside">
         <h2>Latest singer</h2>
         <ul class="mv list1">
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $singerList[$listLength-3]->getSingerImage(); ?>"></a>
				<?php echo $singerList[$listLength-3]->getSingerName(); ?><br>
				<?php echo $singerList[$listLength-3]->getBirthYear(); ?>
			 </li><br>
            <li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $singerList[$listLength-2]->getSingerImage(); ?>"></a>
				<?php echo $singerList[$listLength-2]->getSingerName(); ?><br>
				<?php echo $singerList[$listLength-2]->getBirthYear(); ?>
			 </li><br>
			<li>
				<a href="index.php"><img width="30%" height="30%" src="images/<?php echo $singerList[$listLength-1]->getSingerImage(); ?>"></a>
				<?php echo $singerList[$listLength-1]->getSingerName(); ?><br>
				<?php echo $singerList[$listLength-1]->getBirthYear(); ?>
			 </li><br>
         </ul>
      </div>
   </aside>
   <!-- content -->
   <section id="content">
	   <div>
	   <?php
	   for($i=0;$i<count($singerPagList);$i++){
		   echo '<a href=\'single-singer-page.php?SingerID='.$singerPagList[$i]->getSingerID().'\'>'.$singerPagList[$i]->getSingerName().'</a>';
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
            echo "<a href='singer-page.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$number_of_page; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='singer-page.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='singer-page.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$number_of_page){   
            echo "<a href='singer-page.php?page=".($page+1)."'>  Next </a>";   
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
