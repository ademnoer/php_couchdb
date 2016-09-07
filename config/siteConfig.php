<?php

// URL Configrations:
//$ENV = getenv($APPLICATION_ENV);
$ENV = "DEV";


switch ($ENV) {

    case "PRODUCTION":
        break;

    
    default: #Dev enviroment
        define("DB_TYPE", "MYSQL");
        define("DB_HOST","localhost");
        define("DB_USERNAME","root");
        define("DB_PASSWORD","Adem@123");
        define("DB_DB","qiam");
        
        define("SITE_URL", "http://localhost/php_couchdb/");
        define("STATIC_URL", SITE_URL."static/");
        
        define("LOGIN_URL", SITE_URL."login.php");
        define("LOGOUT_URL", LOGIN_URL."?logout");
        define("REGISTER_URL", SITE_URL."login.php");
        
        define("HELP_URL", SITE_URL."dashboard.php?help");
        define("DASHBOARD_URL", SITE_URL."dashboard.php");
        define("COURSE_URL", SITE_URL."course=");
        define("PROFILE_URL", SITE_URL."profile.php");
        
        
        define("LANGUAGE", "ar");
        break;
}

require_once ("config/trans_".LANGUAGE.".php");
