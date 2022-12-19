<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function isNew()
    {
        if ($this->year > 2021) {
            return "Novità";
        } else {
            "old";
        }
    }
}
