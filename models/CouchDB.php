<?php

class CouchDB {

    static function checkConnection() {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "http://127.0.0.1:5984/"));
        $result = curl_exec($curl);
        curl_close($curl);
        $tmp = json_decode($result, true);
        if ($tmp["couchdb"] == "Welcome") {
            return TRUE;
        }
        die ("database connection is not stable !!! ");
    }

    static function curl_db($method, $db, $data) {
        CouchDB::checkConnection();
        $curl = curl_init();

        switch ($method) {

            case "GET":
                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => "http://127.0.0.1:5984/$db/$data"));
        }
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}

?>