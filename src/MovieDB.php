<?php namespace DigiPig\MovieDB;
 
class MovieDB {
 
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
    }
 
}