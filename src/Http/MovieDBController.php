<?php namespace DigiPig\MovieDB\Http;

use Illuminate\Routing\Controller as BaseController;

class MovieDBController extends BaseController
{
    public function getMovie($IMDBID)
    { 
        $MovieObject = \MovieDB::getMovie($IMDBID);  
        return view('moviedb::index', $MovieObject);  
    }
}