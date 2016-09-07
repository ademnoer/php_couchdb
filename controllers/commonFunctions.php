<?php

function generateCapcha($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function checkCapcha() {
    if ($_POST["capcha"] != $_SESSION["capcha"]) {
        die("invaled capcha !!");
    }
}

function cleanString($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

function checkLogin() {
    if (isset($_SESSION["user"])) {
        return TRUE;
    }
    return FALSE;
}