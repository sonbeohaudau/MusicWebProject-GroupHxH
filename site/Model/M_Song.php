<?php
include_once('E_Song.php');
include_once('../connection.php');

class Model_Song{
	function __construct(){}
	
	function getAllSong(){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Song');
		$result = $stmt->execute();
		$songList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			
			array_push($songList, new Entity_Song($row['SongID'],$row['SongTitle'],$row['Genre'],$row['Country'],$row['SongViews'],$row['AudioLink'],$row['SongImage']));
		}
		return $songList;
	}
	
	function getSongByID($SongID){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Song where SongID = ?');
		$result = $stmt->execute(array($SongID));
		$song;
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    	{
        	$song = new Entity_Song($row['SongID'],$row['SongTitle'],$row['Genre'],$row['Country'],$row['SongViews'],$row['AudioLink'],$row['SongImage']);
    	}
		return $song;
	}
	
	function insertSong($SongTitle,$Genre,$Country,$AudioLink,$SongImage){
		$db = DB::getInstance();
		$stmt1 = $db->prepare('select top 1 SongID +1 as SongID from Song order by SongID desc');
		$result = $stmt1->execute();
		$row = $stmt1->fetch(PDO::FETCH_ASSOC);
		$SongID = $row['SongID'];
		$stmt = $db->prepare('insert into Song(SongID,SongTitle,Genre,Country,SongViews,AudioLink,SongImage) values (?,?,?,?,0,?,?)');
		$result = $stmt->execute(array($SongID,$SongTitle,$Genre,$Country,$AudioLink,$SongImage));
	}
	
	function getPaginationPage($pageNum, $resultPerPage){
		$db = DB::getInstance();
		$stmt = $db->prepare('DECLARE @PageNumber AS INT
								DECLARE @RowsOfPage AS INT
								SET @PageNumber=?
								SET @RowsOfPage=?
								SELECT * FROM Song
								ORDER BY SongID
								OFFSET (@PageNumber-1)*@RowsOfPage ROWS
								FETCH NEXT @RowsOfPage ROWS ONLY');
		$result = $stmt->execute(array($pageNum, $resultPerPage)); //$result = 1 means execute successfully
		$songList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			
			array_push($songList, new Entity_Song($row['SongID'],$row['SongTitle'],$row['Genre'],$row['Country'],$row['SongViews'],$row['AudioLink'],$row['SongImage']));
		}
		return $songList; //return an object list
	}
}


?>