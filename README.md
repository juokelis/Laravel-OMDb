# Laravel OMDb API Package

## Introduction
Laravel package to access the OMDb API in your application.

## What is the OMDb API?
The OMDb API is a free web service to obtain movie information. OMDb API's data is a mashup of other movie sites such as IMBD, Rotten Tomatoes and OMDb contributers.

OMDb API Homepage: http://www.omdbapi.com/

## Installation
Add this to your `composer.json` under `require`:
```
"mikemike/moviedb": "dev-master"
```

Then run:
```
composer install 
```

Add this to your `app.php` config file in providers:
```
Mikemike\MovieDB\MovieDBServiceProvider::class
```

Add this to your `app.php` config file in aliases:
```
'MovieDB' => Mikemike\MovieDB\MovieDBFacade::class
```

Run the following composer command
```
composer dumpautoload
```

## Use

To access the package in your application use:
```
use Mikemike\MovieDB;
```
```
$movies = \MovieDB::getMovie('tt2937696');
```
```
$search = \MovieDB::query('Game of thrones');
```
