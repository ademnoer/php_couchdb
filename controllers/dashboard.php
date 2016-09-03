<?php

require_once ("models/User.php");
require_once ("models/Course.php");
require_once ("config/siteConfig.php");
require_once ("controllers/commonFunctions.php");

session_start();

checkLogin();

$user = $_SESSION["user"];
$courses = getAllCourses();
include_once ("views/dashboard.php");