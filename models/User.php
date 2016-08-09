<?php

require_once("models/CouchDB.php");

class User{
        
        public $id;
        public $username;
        public $password;
        public $fullname;
        public $mark;
        public $class;
        
        
        function __construct($username){
            $tmp = json_decode(CouchDB::curl_db("GET","users",$username), true);
            $this->id = $tmp["_id"];
            
        }
        
}