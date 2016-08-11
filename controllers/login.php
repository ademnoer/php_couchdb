<?php

session_start();
include_once("models/User.php");
include_once ("controllers/LoginClass.php");
include_once ("controllers/siteConfig.php");


// login with post
if (isset($_POST['username'])) {
    echo "loginWithPost";
    LoginClass::loginWithPost();
    
    
// login with Session    
} elseif (isset($_SESSION['login'])) {
    LoginClass::loginWithSession();
    
    
// in not loged, show login page
}
$_SESSION["capcha"] = "123123";
include_once("views/login_form.php");
    