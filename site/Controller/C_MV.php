<?php
include_once('../Model/M_MV.php');
include_once('../Model/E_MV.php');

class Ctrl_MV{
	public function invoke(){
		$modelMV = new Model_MV();
		$MVList = $modelMV->getAllMV();
//		include_once('View/mv-page-test.php');
		return $MVList;
	}
	
	public function insert($MVID,$MVTitle,$MVImage,$MVLink){
		$modelMV = new Model_MV();
		$modelMV->insertMV($MVID,$MVTitle,$MVImage,$MVLink);
	}
}

//$c = new Ctrl_MV();
//$c->invoke();
?>