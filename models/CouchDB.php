<?php

class CouchDB{

    static function curl_db($method,$db,$data){
    
        $curl = curl_init();

        switch ($method){
        
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