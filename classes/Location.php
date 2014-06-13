<?php

Class Location{
	private $Id;
	private $Country;
	private $Continent; 

	public function getID() {
		return $Id;
	}
    public function setID($Id){
    	$Id = $Id;
    }

    public function getCountry() {
		return $Country;
	}
    public function setCountry($Country){
    	$Country = $Country;
    }

    public function getContinent() {
		return $Continent;
	}
    public function setID($Continent){
    	$Continent = $Continent;
    }
}
?>