<?php

require_once ("models_mysql/User.php");
require_once ("models_mysql/Course.php");
require_once ("config/siteConfig.php");
require_once ("controllers/commonFunctions.php");

session_start();

if (!checkLogin()) {header("Location: " . LOGIN_URL);}

$user = $_SESSION["user"];
$course = new Course();
$courses = $course->getAllCourses();
include_once ("views/dashboardView.php");
