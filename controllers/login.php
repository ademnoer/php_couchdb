<?php

session_start();
require_once("models/User.php");
require_once ("controllers/LoginClass.php");
require_once ("config/siteConfig.php");
require_once ("config/trans_".lANGUAGE.".php");



if (isset($_POST['submit'])) {
        $errorMassage = LoginWithPOST();
    
    
} elseif (isset($_SESSION['login'])) {
}



$_SESSION["capcha"] = "123123";
include_once("views/login_form.php");

