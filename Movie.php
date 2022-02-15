<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d’istanza che abbiamo visto stamattina e create un file Movie.php in cui:
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie
{
    public $title;
    public $genre;
    public $duration;
    public $production;
    public $director;
    public $description;

    public function __construct($title, $genre, $description)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
    }


    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }


    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }


    public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }


    public function getProduction()
    {
        return $this->production;
    }
    public function setProduction($production){
        $this->production = $production;
    }


    public function getDirector()
    {
        return $this->director;
    }
    public function setDirector($director){
        $this->director = $director;
    }


    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }

}

$movie = new Movie('Superman', 'Azione, Avventura, Fantascienza', 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.');

// $movie->title = 'Superman';
// $movie->genre = 'Azione, Avventura, Fantascienza';
// $movie->duration = '143min';
// $movie->production = 'Stati Uniti d\'America, Regno Unito, Canada';
// $movie->director = 'Richard Donner';
// $movie->description = 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.'; 
var_dump($movie);