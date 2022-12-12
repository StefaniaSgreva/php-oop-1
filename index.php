<?php
// richiamo i file contenenti le CLASSI di oggetti 
include_once __DIR__ . '/Models/Movie.php';

//oggetti 'Movie' istanziati - OBJECTS
$movie1 = new Movie('Encanto', '2021', '1h 52min', 'Famiglia, Fantasy, Animazione, Musical', 'Creato da Walt Disney Animation Studios con una colonna sonora che include nuove canzoni del premiato autore Lin-Manuel Mirando, "Encanto" racconta la storia della straordinaria famiglia dei Madrigal, che vive in una casa magica in Colombia. Mirabel è l unica figlia senza poteri, ma quando scopre che la magia della casa è in pericolo potrebbe rivelarsi l ultima speranza della famiglia.');
$movie2 = new Movie('Coco', '2017', '1h 44min', 'Famiglia, Fantasy, Animazione, Musical', 'La straordinaria avventura di un ragazzo che sogna di diventare un grande musicista e inizia un viaggio per scoprire i misteri celati dietro le storie e le tradizioni dei suoi antenati.');
$movie3 = new Movie('Soul', '2020', '1h 40min', 'Famiglia, Commedia, Fantasy, Animazione, Musical', 'Pixar Animation Studios ti condurrà in un viaggio dalle strade di New York verso altri mondi per scoprire le risposte alle domande più importanti sulla vita.');
// var_dump($movie1, $movie2);

//stampare proprietà a schermo

echo "titolo: " . $movie1->getTitle();
echo "<br> anno: " . $movie1->getYear();
echo "<br> durata: " . $movie1->getDuration();
echo "<br> genere: " . $movie1->getGenre();
echo "<br> trama: " . $movie1->getDescription();

echo "<hr><br>titolo: " . $movie2->getTitle();
echo "<br> anno: " . $movie2->getYear();
echo "<br> durata: " . $movie2->getDuration();
echo "<br> genere: " . $movie2->getGenre();
echo "<br> trama: " . $movie2->getDescription();

echo "<hr><br>titolo: " . $movie3->getTitle();
echo "<br> anno: " . $movie3->getYear();
echo "<br> durata: " . $movie3->getDuration();
echo "<br> genere: " . $movie3->getGenre();
echo "<br> trama: " . $movie3->getDescription();


?>