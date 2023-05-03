<?php 

require_once './Models/Genre.php';

require_once './Models/Movie.php';

$movie1 = new Movie("Le ali della libertà", 1994, "2h 22min", new Genre(["Drammatico"]), 9.3);

$movie2 = new Movie("Il padrino", 1972, "2h 55min", new Genre(["Poliziesco", "Drammatico"]), 9.2);

$movie3 = new Movie("Il cavaliere oscuro", 2008, "2h 32min",new Genre (["Azione", "Poliziesco", "Drammatico"]), 9.0);