# Laravel OMDB Package

## Introduction
A Laravel package to access OMDB api. 

## What is OMDB?
The OMDb API is a free web service to obtain movie information, all content and images on the site are contributed and maintained by our users.

## Installation
Add this to your `composer.json under psr-4`:
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

To access the package in your controllers/models use 
use DigiPig\MovieDB;
$movie = \MovieDB::getMovie('tt2937696');
