<?php
class Entity_Song{
	public $songID;
	public $rating;
	public $country;
	
	function __construct($songID, $rating, $country){
		$this->songID = $songID;
		$this->rating = $rating;
		$this->country = $country;
	}
	
	
}
?>