<?php

// URL Configrations:
//$ENV = getenv($APPLICATION_ENV);
$ENV = "DEV";


switch ($ENV) {

    case "PRODUCTION":
        break;


    default:
        define("SITE_URL", "http://localhost/php_couchdb/");
        define("LOGIN_URL", SITE_URL."login.php");
        define("REGISTER_URL", SITE_URL."login.php");
        define("DASHBOARD_URL", SITE_URL."dashboard.php");
        define("STATIC_URL", SITE_URL."static/");
        define("LANGUAGE", "ar");
        break;
}

require_once ("config/trans_".LANGUAGE.".php");
