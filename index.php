<?php
// richiamo i file contenenti le CLASSI di oggetti 
include_once __DIR__ . './Models/Movie.php';
include __DIR__ . '/db.php';


// oggetti 'Movie' istanziati - OBJECTS
$movie1 = new Movie('Encanto', '2021', '1h 52min', ['Famiglia', 'Fantasy', 'Animazione', 'Musical'], 'Creato da Walt Disney Animation Studios con una colonna sonora che include nuove canzoni del premiato autore Lin-Manuel Mirando, "Encanto" racconta la storia della straordinaria famiglia dei Madrigal, che vive in una casa magica in Colombia. Mirabel è l unica figlia senza poteri, ma quando scopre che la magia della casa è in pericolo potrebbe rivelarsi l ultima speranza della famiglia.', 'https://www.cnet.com/a/img/resize/4e1f3c05c885e1d1f7bcf1913f2347b834ca68a8/hub/2022/01/14/848244d8-e2ce-43e0-b725-b5b81b911999/encanto-poster.jpg?auto=webp&width=1092');
$movie2 = new Movie('Coco', '2017', '1h 44min', ['Famiglia', 'Fantasy', 'Animazione', 'Musical'], 'La straordinaria avventura di un ragazzo che sogna di diventare un grande musicista e inizia un viaggio per scoprire i misteri celati dietro le storie e le tradizioni dei suoi antenati.', 'https://image.tmdb.org/t/p/original/sZqcEV3KhDITHlUBmyj1a3RRvT9.jpg');
$movie3 = new Movie('Soul', '2020', '1h 40min', ['Famiglia', 'Commedia', 'Fantasy', 'Animazione', 'Musical'], 'Pixar Animation Studios ti condurrà in un viaggio dalle strade di New York verso altri mondi per scoprire le risposte alle domande più importanti sulla vita.', "https://lumiere-a.akamaihd.net/v1/images/au_movie_showcase_soul_rich_r_5eda14f2.jpeg?region=0,0,950,1420");
// var_dump($movie1, $movie2);

// stampare proprietà a schermo

// echo "titolo: " . $movie1->getTitle();
// echo "<br> anno: " . $movie1->getYear();
// echo "<br> durata: " . $movie1->getDuration();
// echo "<br> genere: " . $movie1->getGenres();
// echo "<br> trama: " . $movie1->getDescription();

// echo $movie1->getAllInfos();
// echo $movie2->getAllInfos();
// echo $movie3->getAllInfos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Movies</title>
</head>

<body>
    <!-- <img src="<?php echo ($movie1->getPoster()) ?>" alt="Encanto Poster">
    <img src="<?php echo ($movie2->getPoster()) ?>" alt="Coco Poster">
    <img src="<?php echo ($movie3->getPoster()) ?>" alt="Soul Poster"> -->

    <?php
    foreach ($movies as $movie) { ?>
    <div class="poster">
        <img src="<?php echo $movie->poster ?>" alt="Movie Poster">
    </div>
    <h2>
        <?php echo $movie->title; ?>
    </h2>
    <div>
        <span>
            <?php echo $movie->year; ?>
        </span>
        <span>
            <?php echo $movie->duration; ?>
        </span>
    </div>
    <p>
        <?php echo $movie->description; ?>
    </p>

    <?php } ?>
</body>

</html>