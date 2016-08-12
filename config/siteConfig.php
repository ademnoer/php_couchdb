<?php

// URL Configrations:

switch (getenv($APPLICATION_ENV)) {

    case "PRODUCTION":
        break;


    default:
        define("SITE_URL", "http://localhost/");
        define("LOGIN_URL", "http://localhost/php_couchdb/login.php");
        define("DASHBOARD_URL", "http://localhost/php_couchdb/dashboard.php");
        define("lANGUAGE", "ar");
        break;
}
