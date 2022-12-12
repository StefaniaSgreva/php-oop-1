<?php

//classe
class Movie
{
    //variabili d'istanza - VARIABLES
    public $title;

    public $year;
    public $duration;
    public $genre;
    public $description;
    // public $poster;

    //costruttore - CONSTRUCTOR
    function __construct(string $_title, string $_year, string $_duration, string $_genre, string $_description)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
        $this->description = $_description;
        // $this->poster = $_poster;
    }

    //metodi - METHODS

    public function getTitle()
    {
        return $this->title;
    }

}

?>