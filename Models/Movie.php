<?php 

class Movie {
    public $title;
    public $release;
    public $duration;
    public $genre;
    public $vote;
    public $oldFilm = true;
    
    function __construct(string $title, int $release, string $duration, Genre $genre, float $vote ) {
        $this->title = $title;
        $this->release = $release;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->vote = $vote;


        $this->setOld($release);
    }
    
    public function setOld($release){
        if($release > 2000){
            $this->oldFilm = false;
        }
    }

};