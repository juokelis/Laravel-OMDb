<?php namespace Mikemike\MovieDB;
 
class MovieDB {
 
    private $plot = 'short';
    private $tomatoes = 'true';  
  
    /**
     * MovieDB::getMovie()
     * 
     * @param int $IMDBID
     * @return Array
        (
            [Title] => string
            [Year] => string
            [Rated] => string
            [Released] => string
            [Runtime] => string
            [Genre] => string
            [Director] => string
            [Writer] => string
            [Actors] => string
            [Plot] => string
            [Language] => string
            [Country] => string
            [Awards] => string
            [Poster] => string
            [Metascore] => int
            [imdbRating] => int
            [imdbVotes] => int
            [imdbID] => string
            [Type] => string
            [tomatoMeter] => int
            [tomatoImage] => string
            [tomatoRating] => int
            [tomatoReviews] => int
            [tomatoFresh] => int
            [tomatoRotten] => int
            [tomatoConsensus] => string
            [tomatoUserMeter] => int
            [tomatoUserRating] => int
            [tomatoUserReviews] => int
            [tomatoURL] => string
            [DVD] => string
            [BoxOffice] => string
            [Production] => string
            [Website] => string
            [Response] => boolean
        )
     */
     
    function getMovie($IMDBID) { 
       return $this->getCURL('http://www.omdbapi.com/?i='.$IMDBID.'&plot='.$this->plot.'&r=json&tomatoes='.$this->tomatoes);
    }
    
    /**
     * Perform a query on a single record
     *
     * @param String $query
     * @return
     */
    function single_query($query, array $options=[]) { 
       if(!empty($options['fuzzy'])){
           $fuzzy = ($options['fuzzy'] == true ? true : false);
       }

       $url = 'http://www.omdbapi.com/?t=';
       $url.= urlencode($query);
       if($fuzzy){
           $url.= '*';
       }

       return $this->getCURL($url);
    }
    
    /**
     * Perform a search
     *
     * @param String $query
     * @return
     */
    function search_query($query, array $options=[]) { 
       if(!empty($options['fuzzy'])){
           $fuzzy = ($options['fuzzy'] == true ? true : false);
       }

       $url = 'http://www.omdbapi.com/?s=';
       $url.= urlencode($query);
       if(isset($fuzzy)){
           $url.= '*';
       }

       return $this->getCURL($url);
    }
    
 
    /**
     * MovieDB::getCURL()
     * 
     * @param mixed $CURLOPT_URL
     * @return
     */
    function getCURL($CURLOPT_URL) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $CURLOPT_URL);
        $result = curl_exec($ch);
        curl_close($ch);    
        return json_decode($result,true);         
    }
}