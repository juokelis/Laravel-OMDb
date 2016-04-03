# Laravel OMDB Package

## Introduction
A Laravel package to access the OMDB API in your Laravel application.

## What is the OMDB API?
The OMDb API is a free web service to obtain movie information, all content and images on the site are contributed and maintained by our users. Find out more here: http://www.omdbapi.com/

## Installation
Add this to your `composer.json` under psr-4:
```
"DigiPig\\MovieDB\\": "packages/digipig/moviedb/src/"
```

Add this to your `app.php` config file in providers:
```
DigiPig\MovieDB\MovieDBServiceProvider::class
```

Add this to your `app.php` config file in aliases:
```
'MovieDB' => DigiPig\MovieDB\MovieDBFacade::class
```

Run 
```
composer dumpautoload
```
## Use
Visit ```http://YOURDOMAIN.com/moviedb/tt2937696``` in your web browser to see it in action

To access the package in your application use:
```
use DigiPig\MovieDB;
$MoviesArray = \MovieDB::getMovie('tt2937696');
```
