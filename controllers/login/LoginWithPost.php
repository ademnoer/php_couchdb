<?php

if ($_POST["capcha"] != $_SESSION["capcha"]) {
    die("invaled capcha !!");
}

if ($_POST["submit"] == "login") {
    $user = new User($_POST["username"], $_POST["password"]);
    $user->getUser();
    if ($user->valed == 0) {
        $_SESSION["user"] = $user;
        echo '<a href="'.DASHBOARD_URL.'">'.BROWSER_DOES_NOT_SUPPORT_REDIRECTION.'</a>';
        header("Location: ".DASHBOARD_URL);
        exit(0);
    } elseif ($user->valed == 2) {
        $loginErrorMassage = USER_NOT_EXEIT;
        $_SESSION["user"] = NULL;
    } else {
        $loginErrorMassage = PASSWORD_NOT_CORRECT;
        $_SESSION["user"] = NULL;
    }
    
} elseif ($_POST["submit"] == "register") {
    
}
