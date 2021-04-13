<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
	<input type="text" placeholder="MV ID" name="MVID"><br>
	<input type="text" placeholder="MV Title" name="MVTitle"><br>
	<input type="text" placeholder="MV Image" name="MVImage"><br>
	<input type="text" placeholder="MV Link" name="MVLink"><br>
		<input type="submit" name="submit" value="Insert">
		<input type="reset" value="Reset">
	</form>
	<?php
	include_once('../Controller/C_MV.php');
	$controller = new Ctrl_MV();
	if(isset($_POST['submit'])){
		$MVID = $_POST['MVID'];
		$MVTitle = $_POST['MVTitle'];
		$MVImage = $_POST['MVImage'];
		$MVLink = $_POST['MVLink'];
		$controller->insert($MVID,$MVTitle,$MVImage,$MVLink);
		$MVList = $controller->invoke();
		for($i=0;$i<sizeof($MVList);$i++){
			echo $MVList[$i]->getMVID() . "-" . $MVList[$i]->getMVTitle() . "-" . $MVList[$i]->getMVImage() . "-" . $MVList[$i]->getMVLink();
			print("<br>");
		}
	}
	?>
</body>
</html>
