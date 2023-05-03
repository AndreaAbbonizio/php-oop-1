<?php 

class Movie {
    public $title;
    public $release;
    public $duration;
    public $genre;
    public $vote;
    public $oldFilm = true;
    
    function __construct(string $title, int $release, string $duration, string $genre, float $vote ) {
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

$movie1 = new Movie("Le ali della libertà", 1994, "2h 22min", "Drammatico", 9.3);

$movie2 = new Movie("Il padrino", 1972, "2h 55min", "Poliziesco", 9.2);

$movie3 = new Movie("Il cavaliere oscuro", 2008, "2h 32min", "Azione", 9.0);

var_dump($movie1, $movie2, $movie3);

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Php</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">
        <h1>Film</h1>


    </div>
   
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>