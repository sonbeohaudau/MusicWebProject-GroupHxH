<?php
include_once('../Model/M_Singer.php');
include_once('../Model/E_Singer.php');

class Ctrl_Singer{
	public function invoke(){
		$modelSinger = new Model_Singer();
		$singerList = $modelSinger->getAllSinger();
		return $singerList;
	}
	
	public function insert($SingerName,$BirthYear,$Background,$SingerImage){
		$modelSinger = new Model_Singer();
		$modelSinger->insertSinger($SingerName,$BirthYear,$Background,$SingerImage);
	}
	
	public function getPaginationResult($pageNum, $resultPerPage){
		$modelSinger = new Model_Singer();
		$singerList = $modelSinger->getPaginationPage($pageNum, $resultPerPage);
		return $singerList;
	}
	
	public function getSingleSinger($SingerID){
		$modelSinger = new Model_Singer();
		$singer = $modelSinger->getSingerbyID($SingerID);
		return $singer;
	}
}
?>