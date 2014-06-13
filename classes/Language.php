<?php

Class Language{
    // mother tongue
    // languages the user is interested in

   private $Id;
   private $langName;

   public function getID() {
   		return $Id;
   }
   public function setID($Id) {
   		$Id = $Id;
   }
   public function getLangName() {
   		return $langName;
   }
   public function setLangName($langName){
   		$langName = $langName;
   }
}

?>