<?php
include_once('E_Singer.php');
include_once('../connection.php');

class Model_Singer{
	public function getAllSinger(){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Singer');
		$result = $stmt->execute(); //$result = 1 means execute successfully
		$singerList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			
			array_push($singerList, new Entity_Singer($row['SingerID'],$row['SingerName'],$row['BirthYear'],$row['Background'],$row['SingerImage']));
		}
		return $singerList; //return an object list
	}
	
	public function getSingerByID($SingerID){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Singer where SingerID = ?');
		$result = $stmt->execute(array($SingerID));
		$singer;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			$singer = new Entity_Singer($row['SingerID'],$row['SingerName'],$row['BirthYear'],$row['Background'],$row['SingerImage']);
		}
		return $singer;
	}
	
	function insertSinger($SingerName,$BirthYear,$Background,$SingerImage){
		$db = DB::getInstance();
		$stmt1 = $db->prepare('select top 1 SingerID +1 as SingerID from Singer order by SingerID desc');
		$result = $stmt1->execute();
		$row = $stmt1->fetch(PDO::FETCH_ASSOC);
		$SingerID = $row['SingerID'];
		$stmt = $db->prepare('insert into Singer(SingerID,SingerName,BirthYear,Background,SingerImage) values (?,?,?,?,?)');
		$result = $stmt->execute(array($SingerID, $SingerName,$BirthYear,$Background,$SingerImage));
	}
	
	function getPaginationPage($pageNum, $resultPerPage){
		$db = DB::getInstance();
		$stmt = $db->prepare('DECLARE @PageNumber AS INT
								DECLARE @RowsOfPage AS INT
								SET @PageNumber=?
								SET @RowsOfPage=?
								SELECT * FROM Singer
								ORDER BY SingerID
								OFFSET (@PageNumber-1)*@RowsOfPage ROWS
								FETCH NEXT @RowsOfPage ROWS ONLY');
		$result = $stmt->execute(array($pageNum, $resultPerPage)); //$result = 1 means execute successfully
		$singerList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			
			array_push($singerList, new Entity_Singer($row['SingerID'],$row['SingerName'],$row['BirthYear'],$row['Background'],$row['SingerImage']));
		}
		return $singerList; //return an object list
	}
}
?>