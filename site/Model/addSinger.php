<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include('M_Singer.php');
	$model = new Model_Singer();
if(isset($_POST['SingerName'],$_POST['BirthYear'],$_POST['Background'],$_POST['SingerImage'])){
	$SingerName = $_POST['SingerName'];
	$BirthYear = $_POST['BirthYear'];
	$Background = $_POST['Background'];
	$SingerImage = $_POST['SingerImage'];
	$model->insertSinger($SingerName,$BirthYear,$Background,$SingerImage);
}else{
	echo 'not enough parameter';
}
?>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<input type="text" name="SingerName" placeholder="SingerName"><br>
	<input type="number" name="BirthYear" placeholder="BirthYear"><br>
	<input type="text" name="Background" placeholder="Background"><br>
	<input type="file" name="SingerImage" placeholder="SingerImage"><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
	</form>
</body>
</html>
