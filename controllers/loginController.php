<?php

require_once ("models_mysql/User.php");
require_once ("config/siteConfig.php");
session_start();
require_once ("controllers/commonFunctions.php");


if (checkLogin()) {
    header("Location: " . DASHBOARD_URL);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    checkCapcha();

    if (isset($_POST["login"])) {
        include_once ('logins/login.php');
    } elseif (isset($_POST["register"])) {
        include_once ('logins/register.php');
    } else {
        die("POST WITH NO DATA");
    }
}

if (isset($_GET["logout"])) {
    include ("controllers/logins/logout.php");
}


$_SESSION["capcha"] = generateCapcha();
include_once ("views/loginView.php");

