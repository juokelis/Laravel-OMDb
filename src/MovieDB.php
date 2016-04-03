<?php namespace DigiPig\MovieDB;
 
class MovieDB {
 
    function __construct() {
    
    }
 
    function getMovie($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?i='.$id.'&plot=short&r=json&tomatoes=true');
        $result = curl_exec($ch);
        curl_close($ch);    
        return json_decode($result); 
    }
 
}