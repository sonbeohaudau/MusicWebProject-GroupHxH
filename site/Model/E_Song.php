<?php
class Entity_Song{
	private $SongID;
	private $SongTitle;
	private $Genre;
	private $Country;
	private $SongView;
	private $AudioLink;
	private $SongImage;
	
	function __construct($SongID,$SongTitle,$Genre,$Country,$SongView,$AudioLink,$SongImage){
		$this->SongID = $SongID;
		$this->SongTitle = $SongTitle;
		$this->Genre = $Genre;
		$this->Country = $Country;
		$this->SongView = $SongView;
		$this->AudioLink = $AudioLink;
		$this->SongImage = $SongImage;
	}
	
	function getSongID(){
		return $this->SongID;
	}
	
	function getSongTitle(){
		return $this->SongTitle;
	}
	
	function getGenre(){
		return $this->Genre;
	}
	
	function getCountry(){
		return $this->Country;
	}
	
	function getSongView(){
		return $this->SongView;
	}
	
	function getAudioLink(){
		return $this->AudioLink;
	}
	
	function getSongImage(){
		return $this->SongImage;
	}
	
}
?>