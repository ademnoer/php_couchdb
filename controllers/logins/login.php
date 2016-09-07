<?php

class Login {

    private $valed = FALSE;
    public $error;
    private $password = "";
    private $username = "";

    function __construct() {
        if ($this->valedInput()) {$this->loginUser();}
    }

    private function valedInput() {
        if (!isset($_POST["username"]) || !isset($_POST["password"])) {
            die("SOME DATA ARE MISSING IN THE POST REQUEST");
        }
        $this->password = cleanString($_POST["password"]);
        $this->username = cleanString($_POST["username"]);
        if (($this->password == "") || ($this->username == "")) {
            die("DATA INTERD ARE NOT IN FORMAT");
        }
        return TRUE;
    }

    function loginUser() {
        $user = new User($_POST["username"], $_POST["password"]);
        $user->getUser();
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


$login = new Login();