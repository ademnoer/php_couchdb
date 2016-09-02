<?php

session_start();
require_once ("models/User.php");
require_once ("config/siteConfig.php");
require_once ("commonFunctions.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
        include_once ('login/LoginWithPost.php');
        var_dump($_SESSION);
        exit(0);
}


#once the login page opened, user must login again 

$_SESSION["user"] = NULL;
$_SESSION["capcha"] = generateCapcha();
include_once ("views/login.php");

