<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function LoginWithSESSION() {
    if (!isset($_SESSION['login'])) {
        return FALSE;
    }

    if ($_SESSION['lgoin'] != TRUE) {
        return FALSE;
    }

    if ($_SESSION["user_id"] == $_COOKIE['user_id']) {
        
    }
    
}
