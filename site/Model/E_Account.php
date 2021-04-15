<?php
class Entity_Account{
	private $AccountID;
	private $Username;
	private $PasswordHash;
	private $Avatar;
	
	function __construct($AccountID, $Username, $PasswordHash, $Avatar){
		$this->AccountID = $AccountID;
		$this->Username = $Username;
		$this->PasswordHash = $PasswordHash;
		$this->Avatar = $Avatar;
	}
	
	function getAccountID(){
		return $this->AccountID;
	}
	
	function getUsername(){
		return $this->Username;
	}
	
	function getPassword(){
		return $this->PasswordHash;
	}
	
	function getAvatar(){
		return $this->Avatar;
	}
	
}
?>