<?php
// v1 (Habib)
//Start of Rating Class
Class Rating{

    //declaring Variables
    private  $ratingId;
    private  $like;
    private  $disLike;
    private $belongsTo;
    
    public function getRateId(){
        return $ratingId;
    }
    public function setRateId($rateid){
        $ratingId   =   $rateid;
    }
    
    public function getLike(){
        return $like;
    }
    public function setLike($Like){
        $like   =   $Like;
    }
    
    public function getDisLike(){
        return $disLike;
    }
    public function setDisLike($dislike){
        $disLike    =   $dislike;
    }
    
    public function getBelongsTo(){
        return $belongsTo;
    }
    public function setBelongTo($belongto){
        $belongsTo  =   $belongto;
    }
}//end of Rating Class
?>