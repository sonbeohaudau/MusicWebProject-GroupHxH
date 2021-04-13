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
			
			array_push($songList, new Entity_Song($row['songID'],$row['rating'],$row['country']));
		}
		return $songList;
	}
	
	function getSongByID($songID){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Song where songID = ?');
		$result = $stmt->execute($songID);
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    	{
        	echo $row['country']."-".$row['proposer']."-".$row['rating']."<br>";
    	}
	}
	
}

//$model = new Model_Song();
//$model->getAllSong();
?>