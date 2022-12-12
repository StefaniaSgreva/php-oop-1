<?php
// richiamo i file contenenti le CLASSI di oggetti 
include_once __DIR__ . '/Models/Movie.php';

//oggetti 'Movie' istanziati
$firstMovie = new Movie('Encanto', '2021', '1h 52min', 'Famiglia, Fantasy, Animazione, Musical', 'Creato da Walt Disney Animation Studios con una colonna sonora che include nuove canzoni del premiato autore Lin-Manuel Mirando, "Encanto" racconta la storia della straordinaria famiglia dei Madrigal, che vive in una casa magica in Colombia. Mirabel è l unica figlia senza poteri, ma quando scopre che la magia della casa è in pericolo potrebbe rivelarsi l ultima speranza della famiglia.');
$secondMovie = new Movie('Coco', '2017', '1h 44min', 'Famiglia, Fantasy, Animazione, Musical', 'La straordinaria avventura di un ragazzo che sogna di diventare un grande musicista e inizia un viaggio per scoprire i misteri celati dietro le storie e le tradizioni dei suoi antenati.');
var_dump($firstMovie, $secondMovie);

//stampare proprietà a schermo
echo $firstMovie->getTitle();
echo $secondMovie->getTitle();


?>