<?php
//classe
class Movie
{
    //variabili d'istanza - VARIABLES
    public $title;

    public $year;
    public $duration;
    public $genres;
    public $description;
    public $poster;



    //costruttore - CONSTRUCTOR
    function __construct(string $_title, string $_year, string $_duration, array $_genres, string $_description, string $_poster)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
        $this->description = $_description;
        $this->poster = $_poster;
    }

    //metodi - METHODS

    //GET
    public function getTitle()
    {
        return $this->title;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getDuration()
    {
        return $this->duration;
    }
    // public function getGenre()
    // {
    //     return $this->genres;
    // }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPoster()
    {
        return $this->poster;
    }

    public function getAllInfos()
    {
        return '<hr>' . 'titolo: ' . $this->title . '<br>' . 'anno: ' . $this->year . '<br>' . 'durata: ' . $this->duration . '<br>' . 'genere: ' . implode('', $this->genres) . '<br>' . 'trama: ' . $this->description;
    }


}

?>