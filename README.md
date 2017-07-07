# Laravel OMDb API Package

## Introduction
Laravel package to access the OMDb API in your application.

## What is the OMDb API?
The OMDb API is a free web service to obtain movie information. OMDb API's data is a mashup of other movie sites such as IMBD, Rotten Tomatoes and OMDb contributers.

OMDb API Homepage: http://www.omdbapi.com/

## Installation
Add this to your `composer.json` under `repositories`:
```
    "repositories": [
      {
        "type": "vcs",
        "url": "https://github.com/juokelis/Laravel-OMDb"
      }
    ],
```

Add this to your `composer.json` under `require`:
```
"juokelis/moviedb": "dev-master"
```

Then run:
```
composer update
composer install 
```

Add this to your `app.php` config file in providers:
```
Juokelis\MovieDB\MovieDBServiceProvider::class
```

Add this to your `app.php` config file in aliases:
```
'MovieDB' => Juokelis\MovieDB\MovieDBFacade::class
```

Run the following composer command
```
composer dumpautoload
php artisan vendor:publish
```

## Use

To access the package in your application use:
```
use Juokelis\MovieDB;
```
```
$movies = \MovieDB::getMovie('tt2937696');
```
```
$search = \MovieDB::query('Game of thrones');
```
