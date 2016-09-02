<?php

require_once ("models/User.php");
require_once ("config/siteConfig.php");
require_once ("controllers/commonFunctions.php");

checkLogin();
$user = $_SESSION["user"];
echo "Hi ". $user->fullname;
