<?php
include_once('E_Account.php');
include_once('../connection.php');

class Model_Account{
	function __construct(){}
	
	function getAllAccount(){
		$db = DB::getInstance();
		$stmt = $db->prepare('Select * from Account');
		$result = $stmt->execute(); //$result = 1 means execute successfully
		$AccList = array();
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //to fetch result of each row in table
			
			array_push($AccList, new Entity_Account($row['AccountID'],$row['Username'],$row['PasswordHash'],$row['Avatar']));
		}
		return $AccList; //return an object list
	}
	
	function createAdmin($AccountID,$Username, $PasswordHash, $Avatar){
		$db = DB::getInstance();
		$stmt = $db->prepare('insert into Account(AccountID, Username, PasswordHash, Avatar) values (?,?,?,?)');
		$result = $stmt->execute(array($AccountID, $Username, hash('sha256',$PasswordHash), $Avatar));
	}
	
	function insertAccount($Username, $PasswordHash, $Avatar){
		$db = DB::getInstance();
		$stmt1 = $db->prepare('select top 1 AccountID +1 as AccountID from Account order by AccountID desc');
		$result = $stmt1->execute();
		$row = $stmt1->fetch(PDO::FETCH_ASSOC);
		$AccountID = $row['AccountID'];
		$stmt2 = $db->prepare('insert into Account(AccountID, Username, PasswordHash, Avatar) values (?,?,?,?)');
		$result = $stmt2->execute(array($AccountID, $Username, hash('sha256',$PasswordHash), $Avatar));
	}
	
	function deleteAccount($AccountID){
		$db = DB::getInstance();
		$stmt = $db->prepare('delete from Account where AccountID = ?');
		$result = $stmt->execute(array($AccountID)); //must execute an array of key input, even if only 1 key exists 
												//execute($MVID) => error
	}
	
	function getAccount($Username, $Password){
		$db = DB::getInstance();
		$stmt = $db->prepare('select * from Account where Username = ? and PasswordHash = ?');
		$PasswordHash = hash('sha256',$Password);
		$result = $stmt->execute(array($Username, $PasswordHash));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$acc = new Entity_Account($row['AccountID'],$row['Username'],$row['PasswordHash'],$row['Avatar']);
		return $acc;
	}
	
	function checkUserforSignup($username){
		$db = DB::getInstance();
		$stmt = $db->prepare('select * from Account where Username = ?');
		$result = $stmt->execute(array($username));
		if(iterator_count($stmt)>0){
			return 0;
		}else{
			return 1;
		}
	}
	
	function checkUserforSignin($Username, $Password){
		$db = DB::getInstance();
		$stmt = $db->prepare('select * from Account where Username = ? and PasswordHash = ?');
		$PasswordHash = hash('sha256',$Password);
		$result = $stmt->execute(array($Username, $PasswordHash));
		if(iterator_count($stmt)==1){
			return 1;
		}else{
			return 0;
		}
	}
}

$m = new Model_Account();
//echo $m->checkUserforSignup('phihungthnc');
$m->createAdmin(1,'admin1','admin1','xxx');
//$m->insertAccount('phihungthnc','bolalong','xxx');
//$a = $m->getAccount('phihungthnc','bolalong');
//echo $a->getAccountID()."<br>".$a->getUsername()."<br>".$a->getPassword()."<br>".$a->getAvatar();
?>