<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include_once('../Controller/C_Song.php');
		$c = new Ctrl_Song();
		$c->invoke();
		for($i=0;$i<sizeof($songList);$i++){
			echo $songList[$i]->songID . "-" . $songList[$i]->rating . "-" . $songList[$i]->country;
			print("<br>");
		}
	?>
</body>
</html>
