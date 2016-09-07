<?php

class registerController {

    private $valed = FALSE;
    public $error;
    private $password;
    private $repassword;
    private $username;
    private $fullname;

    function __construct() {
        if ($this->valedInput()) {
            $this->registerUser();
        }
    }

    private function valedInput() {
        if (!isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["repassword"]) || !isset($_POST["fullname"])) {
            die("SOME DATA ARE MISSING IN THE POST REQUEST");
        }
        $this->password = cleanString($_POST["password"]);
        $this->repassword = cleanString($_POST["repassword"]);
        $this->username = cleanString($_POST["username"]);
        $this->fullname = cleanString($_POST["fullname"]);
        if (($this->password == "") || ($this->repassword == "") || ($this->fullname == "") || ($this->username == "")) {
            die("DATA INTERD ARE NOT IN FORMAT");
        }

        if ($this->repassword != $this->password) {
            $this->error = PASSWORD_NOT_MATCH;
            return FALSE;
        }
        return TRUE;
    }

    private function registerUser() {
        $user = new User($this->username, $this->password);
        $user->setUser($this->fullname);
        if ($user->valed == TRUE) {
            $_SESSION["user"] = $user;
            echo '<a href="' . DASHBOARD_URL . '">' . BROWSER_DOES_NOT_SUPPORT_REDIRECTION . '</a>';
            header("Location: " . DASHBOARD_URL);
            exit(0);
        } else {
            $this->error = $user->error;
            $_SESSION["user"] = NULL;
        }
    }

}

$register = new registerController();
