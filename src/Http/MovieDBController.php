<?php namespace DigiPig\MovieDB\Http;

use Illuminate\Routing\Controller as BaseController;

class MovieDBController extends BaseController
{
<<<<<<< HEAD
    public function getMovie($IMDBID)
    { 
        $MovieObject = \MovieDB::getMovie($IMDBID);  
        return view('moviedb::index', $MovieObject);  
=======
    public function index()
    {
        // forward slash to go down a directory?
        //return \MovieDB::getMovie('tt2937696');
        $MovieObject = \MovieDB::getMovie('tt2937696');        
        print_r($MovieObject);
        
>>>>>>> ec53ae59d9062a6de70c8b05ae60f80113119657
    }
}