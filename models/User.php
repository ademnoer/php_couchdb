<?php

require_once("models/CouchDB.php");

class User {

    public $id;
    public $password;
    public $valed;
    
    function __construct($username, $password) {
        $this->id = cleanString($username);
        $this->password = $password;
    }

    function getUser() {
        $tmp = json_decode(CouchDB::curl_db("GET", "users", $this->id), true);
        if (isset($tmp["_id"])) {
            $this->id = $tmp["_id"];
            $this->valed = ($tmp["password"] == $this->password) ? 0 : 1;
            return;
        }
        $this->valed = 2;
    }

    function storeUser() {
        $tmp = json_decode(CouchDB::curl_db("PUT", "users", $this->id), true);
    }

}
