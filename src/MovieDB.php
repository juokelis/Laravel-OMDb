<?php namespace DigiPig\MovieDB;
 
class MovieDB {
 
<<<<<<< HEAD
    private $plot = 'short';
    private $tomatoes = 'true';
    private $type = 'movie';
  
    function getMovie($IMDBID) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?i='.$IMDBID.'&plot='.$this->plot.'&r=json&type='.$this->type.'&tomatoes='.$this->tomatoes);
        $result = curl_exec($ch);
        curl_close($ch);    
        return json_decode($result,true); 
=======
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
>>>>>>> ec53ae59d9062a6de70c8b05ae60f80113119657
    }
 
}