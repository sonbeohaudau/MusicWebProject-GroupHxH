<?php
include_once('../Model/M_Song.php');
include_once('../Model/E_Song.php');

class Ctrl_Song{
	public function invoke(){
		$modelSong = new Model_Song();
		$songList = $modelSong->getAllSong();
//		for($i=0;$i<sizeof($songList);$i++){
//			echo $songList[$i]->songID;
//			print("<br>");
//		}
		include_once('../View/song-page-test.php');
	}
}

$c = new Ctrl_Song();
$c->invoke();
?>