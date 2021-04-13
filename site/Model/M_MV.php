<?php
include_once('E_MV.php');
include_once('../connection.php');

class Model_MV{
	function __construct(){}
	
	function getAllMV(){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from MV');
		$result = $stmt->execute(); //$result = 1 means execute successfully
		$MVList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			
			array_push($MVList, new Entity_MV($row['MVID'],$row['MVTitle'],$row['MVImage'],$row['MVLink']));
		}
		return $MVList; //return an object list
	}
	
	function insertMV($MVID, $MVTitle, $MVImage, $MVLink){
		$db = DB::getInstance();
		$stmt = $db->prepare('insert into MV(MVID,MVTitle,MVImage,MVLink) values (?,?,?,?)');
		$result = $stmt->execute(array($MVID, $MVTitle, $MVImage, $MVLink));
	}
	
	function deleteMV($MVID){
		$db = DB::getInstance();
		$stmt = $db->prepare('delete from MV where MVID = ?');
		$result = $stmt->execute(array($MVID)); //must execute an array of key input, even if only 1 key exists 
												//execute($MVID) => error
	}
	
	function updateMV($MVID, $MVTitle, $MVImage, $MVLink){
		$db = DB::getInstance();
		$stmt = $db->prepare('update MV
							  set MVTitle = ? , MVImage = ? , MVLink = ?
							  where MVID = ?');
		$result = $stmt->execute(array($MVTitle, $MVImage, $MVLink, $MVID));
	}
	
	function getMVbyID($MVID){
		$db = DB::getInstance();
		$stmt = $db->prepare('select * from MV where MVID = ?');
		$result = $stmt->execute(array($MVID));
		$mv;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			$mv = new Entity_MV($row['MVID'],$row['MVTitle'],$row['MVImage'],$row['MVLink']);
		}
		return $mv;
	}
}

$m = new Model_MV();
//$m->getAllMV();
//$m->insertMV(1,'First MV for insertMV fucntion test','test.png','test.mp4');
//$m->deleteMV(1);
//$m->updateMV(1,'Title after update','afterupdate.png','afterupdate.mp4');

//$MV = $m->getMVbyID(1);
//echo $MV->getMVID()."<br>".$MV->getMVTitle()."<br>".$MV->getMVImage()."<br>".$MV->getMVLink();
?>