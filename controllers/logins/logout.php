<?php

include ("config/siteConfig.php");
session_start();

if (isset($_SESSION["user"])) {
    $_SESSION["user"] = NULL;
    session_destroy();
    header("Location: " . LOGIN_URL);
    exit(0);
} else {
    header("Location: " . LOGIN_URL);
    exit(0);
}