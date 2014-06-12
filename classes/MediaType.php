<?php
//v2 (Habib)
Class MediaType{
    
    //declaring Variables
    private $mediaTypeId;
    private $mediaTypeName; // video, audio, image

    //Start of the getters and setters
    
    public function getmediaTypeName(){
        return $mediaTypeName;
    }
    public function setmediaType($mediatypename){
        $mediaTypeName  =   $mediatypname;
    }
    
    public function getmediaTypeId(){
        return $mediaTypeId;
    }
    public function setmediaTypeId($mediatypeid){
        $mediaTypeId    =   $mediatypeid;
    }
    
} //End of MediaType Class
?>