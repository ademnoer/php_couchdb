<?php

require_once ("models_mysql/User.php");
require_once ("models_mysql/Profile.php");
require_once ("config/siteConfig.php");
require_once ("controllers/commonFunctions.php");

session_start();

if (!checkLogin()) {header("Location: " . LOGIN_URL);}

$profile = new Profile($user);
require_once ("views/profileView.php");