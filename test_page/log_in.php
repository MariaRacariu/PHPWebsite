<?php
//0 is the time until it expires
//null domain name
//null is path location
//true will return over a secure connection
//true will is a HttpOnly cookie and will be send with a secure connection
setcookie('user_id','maria',60*60,null,null);
session_start();

if(isset($_SESSION['count'])){
    $_SESSION['count']=$_SESSION['count']+1;
    if($_SESSION['count'] > 4){
        session_destroy();
    }
}else{
    $_SESSION['count'] = 1;
}

print "you looked at this page".$_SESSION['count']. "times";

