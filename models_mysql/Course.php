<?php

class Course {

    private $connection;
    private $data;
    

    function __construct() {
        $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DB);
        $this->connection->query("SET NAMES utf8;");
    }

    function getAllCourses() {
        $result = $this->connection->query("SELECT id,thumb,title FROM courses;");
        $this->connection->close();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function getCourse($id) {
        $result = $this->connection->query("SELECT id,title,dec FROM courses WHERE id=$id LIMIT 1;");
        $this->connection->close();
        $this->data = $result->fetch_all(MYSQLI_NUM);
        return $this->data;
    }

}
