<?php

require_once("models/CouchDB.php");

class User {

    public $id;
    public $password;
    public $fullname;
    public $mark;
    public $class;
    public $valed;

    function __construct($username, $password) {
        $tmp = json_decode(CouchDB::curl_db("GET", "users", $username), true);
        if (isset($tmp["_id"])) {
            $this->id = $tmp["_id"];
            $this->password = $tmp["password"];
            $this->fullname = $tmp["fullname"];
            $this->mark = $tmp["mark"];
            $this->class = $tmp["class"];
            $this->valed = ($password == $this->password) ? 0 : 1;
            return;
        }
        $this->valed = 2;
    }

}
