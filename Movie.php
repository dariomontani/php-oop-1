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
}

$movie = new Movie();

$movie->title = 'Superman';
$movie->genre = 'Azione, Avventura, Fantascienza';
$movie->duration = '143min';
$movie->production = 'Stati Uniti d\'America, Regno Unito, Canada';
$movie->director = 'Richard Donner';
$movie->description = 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.'; 
var_dump($movie);