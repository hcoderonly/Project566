<?php
// v1 (Habib)
Class Media{
    
    //declaring Variables
    private $mediaId;
    private $mediaName;
    private $mediaDesc;
    private $mediaLink;
    private $mediaBelongs;
    private $mediaTypeId;

    //Start of getters and setters
    public function getMediaId(){
        return $mediaId;
    }
    public function setMediaId($mediaid){
        $mediaId    =   $mediaid;
    }
    
    public function getMediaName(){
        return $mediaName;
    }
    public function setMediaName($medianame){
        $mediaName  =   $medianame;
    }
    
    public function getMediaDesc(){
        return $mediaDesc;
    }
    public function setMediaDesc($mediadesc){
        $mediaDesc  =   $mediadesc;
    }

    public function getMediaLink(){
        return $mediaLink;
    }
    public function setMediaLink($medialink){
        $mediaLink  =   $medialink;
    }
    
    public function getMediaBelongs(){
        return $mediaBelongs;
    }
    public function setMediaBelongs($mediabelongs){
        $mediaBelongs   =   $mediabelongs;
    }
    
    public function getmediaTypeId(){
        return $mediaTypeId;
    }
    
    public function setmediaTypeId($mediatypeid){
        $mediaTypeId    =   $mediatypeid;
    }
}//end of Media Class

?>
