<?php namespace DigiPig\MovieDB\Http;

use Illuminate\Routing\Controller as BaseController;

class MovieDBController extends BaseController
{
    public function index()
    {
        // forward slash to go down a directory?
        //return \MovieDB::getMovie('tt2937696');
        $MovieObject = \MovieDB::getMovie('tt2937696');        
        print_r($MovieObject);
        
    }
}