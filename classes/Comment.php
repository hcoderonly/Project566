<?php
// v1 (Habib)

//Start of the Comment Class..
Class Comment{

    //declaring Variables
    private $commentId;
    private $commentText;
    private $commentBelongsTo;
    
    
    //start of the getter and setter
    public function getCommentId(){
        return $commentId;
    }
    public function setCommentId($comId){
        $commentId  =   $comId;
    }
    
    public function getCommentText(){
        return $commentText;
    }
    public function setCommentText($comText){
        $commentText    =   $comText;
    }
    
    public function getcommentBelongsTo(){
        return $commentBelongsTo;
    }
    public function setcommentBelongsTo($comBelongsTo){
        $commentBelongsTo   =   $comBelongsTo;
    }

}//End of the Comment Class


?>