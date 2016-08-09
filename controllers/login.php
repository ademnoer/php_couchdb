<?php

include_once("models/User.php");


if (isset($_POST['submit'])) {
    
    if ( isset($_POST['username']) && isset($_POST['password']) ) {
        $user = new User($_POST['username']);

        if (isset($user->id)) {
            header("Location: dashboard.php");
        }else{
            echo "usernotfound";
        }
    }
    
}

if (isset($_SESSION['login'])){

}

include_once("views/login_form.php");

