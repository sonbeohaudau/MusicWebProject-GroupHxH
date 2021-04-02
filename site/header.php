<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<header>
	   <a href="index.php"><img src="images/hxh-icon.png" style="width: 100px; height: 100px; float: left"></a>
   <div class="container">
         <h1><a href="index.php"></a></h1>
      <nav>
         <ul>
            <li class="m1"><a href="index.php" <?php if($_SESSION["mode"] == 1) echo "class=\"active\""?>><span>home</span></a></li>
            <li class="m2"><a href="song-page.php" <?php if($_SESSION["mode"] == 2) echo "class=\"active\""?>><span>Songs</span></a></li>
            <li class="m3"><a href="singer-page.php" <?php if($_SESSION["mode"] == 3) echo "class=\"active\""?>><span>Singers</span></a></li>
            <li class="m4"><a href="news-page.php" <?php if($_SESSION["mode"] == 4) echo "class=\"active\""?>><span>News</span></a></li>
            <li class="m5 last"><a href="account-page.php" <?php if($_SESSION["mode"] == 5) echo "class=\"active\""?>><span>Account</span></a></li>
         </ul>
      </nav>
   </div>
   </header>
</body>
</html>
