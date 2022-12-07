<?php

class Movie{

     public $title;
     public $director;
     public $release_year;
     public $img;

     public function __construct($_title, $_director, $_release_year)
     {
        $this->title = $_title;
        $this->director = $_director;
        $this->release_year = $_release_year;
     }

     public function setImage($_img){
        $this->img = $_img;
     }

}




?>