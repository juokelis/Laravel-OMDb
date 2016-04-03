# Laravel OMDb API Package

## Introduction
A Laravel package to access the OMDb API in your Laravel application.

## What is the OMDb API?
The OMDb API is a free web service to obtain movie information. OMDb API's data is a mashup of other movie sites such as IMBD, Rotten Tomatoes and OMDb contributers.

OMDb API Homepage: http://www.omdbapi.com/

## Installation
Add this to your `composer.json` under `psr-4`:
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

Run the following composer command
```
composer dumpautoload
```
## Use
Visit ```http://YOURDOMAIN.com/moviedb/tt2937696``` in your web browser to see it in action

To access the package in your application use:
```
use DigiPig\MovieDB;
```
```
$MoviesArray = \MovieDB::getMovie('tt2937696');
```
