<?php
include_once('../Model/M_Song.php');
include_once('../Model/E_Song.php');

class Ctrl_Song{
	public function invoke(){
		$modelSong = new Model_Song();
		$songList = $modelSong->getAllSong();
		return $songList;
	}
	
	public function insert($SongTitle,$Genre,$Country,$AudioLink,$SongImage){
		$modelMV = new Model_MV();
		$modelMV->insertMV($SongTitle,$Genre,$Country,$AudioLink,$SongImage);
	}
	
	public function getPaginationResult($pageNum, $resultPerPage){
		$modelSong = new Model_Song();
		$SongList = $modelSong->getPaginationPage($pageNum, $resultPerPage);
		return $SongList;
	}
	
	public function getSingleSong($SongID){
		$modelSong = new Model_Song();
		$song = $modelSong->getSongbyID($SongID);
		return $song;
	}
}

?>