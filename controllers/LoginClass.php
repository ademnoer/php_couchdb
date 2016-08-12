<?php

function login($user) {
        $_SESSION["login"] = TRUE;
        $_SESSION["user"] = $user;
        header("Location: ".DASHBOARD_URL);
        exit(0);
    }



function LoginWithPOST() {
    $Massage = "";
    switch ($_POST["submit"]) {
        case "login":
            $user = new User($_POST["username"], $_POST["password"]);
            if ($user->valed == 0) {
                login($user);
            }elseif ($user->valed == 2) {
                $Massage = USER_NOT_EXEIT;
            }  else {
                $Massage = PASSWORD_NOT_CORRECT;
            }
            return $Massage;
        case "register":

            break;
    }
}

