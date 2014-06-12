<?php 
// v1
Class User{

    private $id;//  int
    private $first_name;
    private $last_name;
    private $login;
    private $password;
    private $reputation;//  int. range: -n to n
    private $image;
    private $email; //zero or more?
    private $DOB;
    private $location; // an instance of class Location. (address, specific/general)
    private $registration_date;
    private $user_type; // an instance of class UserType.  admin/user/guest
    private $mother_tongue; //  one or more
    private $email_subscribed; // bit whether user is subscribed or not
    private $interest_langs; // langs in which the user is interested
 
}
?>
