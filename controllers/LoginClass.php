<?php

class LoginClass {

    public $errorMassage;
    private $user;
                function __construct() {
        
    }

    static function loginWithPost() {
        switch ($_POST["submit"]) {
            case "login":
                $this->user = $this->createUser();
                if ($this->user){ $this->login();}
                return;
                break;
            case "register":


                break;
        }
        
    }

    static function loginWithSession() {
        echo 'LoginWithSession();';
    }

    private function createUser() {
        $user = new User($_POST["username"]);
        switch ($this->user->valed) {
            case 0:
                return;
                break;
            case 1:
                $this->errorMassage = "user not exist";
                $this->user = FALSE;
                break;
            case 2:
                $this->errorMassage = "Password not correct";
                $this->user = FALSE;
                break;
        }
    }
    
    private function login(){
        $_SESSION["login"]=TRUE;
        $_SESSION["user"]=$this->user;
        header("Location: dashboad.php");
        exit(0);
    }
}
