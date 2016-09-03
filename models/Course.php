<?php

class Course {

    public $id;
    public $fullname;
    public $thump;

    function __construct($id) {
        $result = json_decode(CouchDB::curl_db("GET", "courses", $id),TRUE);
        if (isset($result["error"])) {
            $this->id = NULL;
        } else {
            $this->id = $result["id"];
            $this->fullname = $result["fullname"];
            $this->thump = $result["thump"];
        }
    }

    function getMaterial() {
        $result = CouchDB::curl_db("GET", "courses", $this->id);
        return $result->material;
    }

    function view() {
        
    }

}

function getAllCourses() {
    $tmp = json_decode(CouchDB::curl_db("GET", "courses", "allcourses"),TRUE);
    $result = $tmp["courses"];
    return $result;
    
}