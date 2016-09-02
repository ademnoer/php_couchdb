<?php

if ($_POST["capcha"] != $_SESSION["capcha"]) {
    die("invaled capcha !!");
}

if ($_POST["submit"] == "login") {
    $user = new User($_POST["username"], $_POST["password"]);
    if ($user->valed == 0) {
        $_SESSION["user"] = $user;
        echo '<a href="'.DASHBOARD_URL.'">'.BROWSER_DOES_NOT_SUPPORT_REDIRECTION.'</a>';
        var_dump($user);
        return header("Location: ".DASHBOARD_URL);
        exit(0);
    } elseif ($user->valed == 2) {
        $errorMassage = USER_NOT_EXEIT;
        $_SESSION["user"] = NULL;
    } else {
        $errorMassage = PASSWORD_NOT_CORRECT;
        $_SESSION["user"] = NULL;
    }
    
} elseif ($_POST["submit"] == "register") {
    
}
