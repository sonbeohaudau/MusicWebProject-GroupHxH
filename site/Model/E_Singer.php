<?php
class Entity_Singer{
	private $SingerID;
	private $SingerName;
	private $BirthYear;
	private $Background;
	private $SingerImage;
	
	function __construct($SingerID,$SingerName,$BirthYear,$Background,$SingerImage){
		$this->SingerID = $SingerID;
		$this->SingerName = $SingerName;
		$this->BirthYear = $BirthYear;
		$this->Background = $Background;
		$this->SingerImage = $SingerImage;
	}
	
	function getSingerID(){
		return $this->SingerID;
	}
	
	function getSingerName(){
		return $this->SingerName;
	}
	
	function getBirthYear(){
		return $this->BirthYear;
	}
	
	function getBackground(){
		return $this->Background;
	}
	
	function getSingerImage(){
		return $this->SingerImage;
	}
}
?>