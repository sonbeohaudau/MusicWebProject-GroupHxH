<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include('M_Song.php');
	$model = new Model_Song();
if(isset($_POST['SongTitle'],$_POST['Genre'],$_POST['Country'],$_POST['AudioLink'],$_POST['SongImage'])){
	$SongTitle = $_POST['SongTitle'];
	$Genre = $_POST['Genre'];
	$Country = $_POST['Country'];
	$AudioLink = $_POST['AudioLink'];
	$SongImage = $_POST['SongImage'];
	$model->insertSong($SongTitle,$Genre,$Country,$AudioLink,$SongImage);
}else{
	echo 'not enough parameter';
}
?>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<input type="text" name="SongTitle" placeholder="SongTitle"><br>
	<input type="text" name="Genre" placeholder="Genre"><br>
	<input type="text" name="Country" placeholder="Country"><br>
	<input type="text" name="AudioLink" placeholder="AudioLink"><br>
	<input type="text" name="SongImage" placeholder="SongImage"><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
	</form>
</body>
</html>
