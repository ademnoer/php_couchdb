<?php

class User {

    private $connection;
    public $username;
    public $password;
    public $valed = FALSE;
    public $error = FALSE;
    public $fullname;
                function __construct($username, $password) {
        $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DB);
        $this->connection->query("SET NAMES utf8;");
        $this->username = $username;
        $this->password = $password;
    }

    public function getUser() {
        $sql = "SELECT password, fullname FROM users WHERE username='$this->username' LIMIT 1";
        $result = $this->connection->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_array();
            if ($row["password"] == $this->password) {
                $this->valed = TRUE;
                $this->fullname = $row["fullname"];
            } else {
                $this->error = PASSWORD_NOT_CORRECT;
            }
        } else {
            $this->error = USER_NOT_EXEIT;
        }
        $this->closeConnection();
    }

    function setUser($fullname) {
        $exist_user = $this->connection->query("SELECT password FROM users WHERE username='$this->username' LIMIT 1");
        if ($exist_user->num_rows == 0) {
            $result = $this->connection->query("INSERT INTO users (username, password, fullname) VALUES ('$this->username', '$this->password', '$fullname');");
            if ($result) {
                $this->valed = TRUE;
            } else {
                $this->error = CANNOT_ADD_USER;
            }
        }
        $this->error = USER_ALREADY_EXICT;
        closeConnection();
    }

    function closeConnection() {
        $this->connection->close();
    }

}
