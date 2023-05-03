<?php 

require_once './Models/db.php';


$movies[] = $movie1;
$movies[] = $movie2;
$movies[] = $movie3;



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

    <?php
    include './Views/partials/header.php';
    ?>


    <div class="container text-center">
        <h1 class="mb-3">Film</h1>

        <h2 class="mb-3">
            Migliori film del 900
        </h2>


        <table class="table text-center mb-3">
            <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Uscita</th>
                  <th scope="col">Durata</th>
                  <th scope="col">Genere</th>
                  <th scope="col">Voto</th>
                  <th scope="col">Film 900</th>
                </tr>
            </thead>
            <tbody>

                <?php 

                    foreach($movies as $singleMovie) {
                    ?>
                    <tr>
                        <td><?php echo $singleMovie->title ?></td>
                        <td><?php echo $singleMovie->release ?></td>
                        <td><?php echo $singleMovie->duration ?></td>
                        <td><?php foreach($singleMovie->genre as $result) {
                            foreach($result as $singlegenre){
                                echo $singlegenre . ', ';
                            };
                        }
                        ?>
                        </td>
                        <td><?php echo $singleMovie->vote ?></td>
                        <td><?php echo $singleMovie->oldFilm?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>


    </div>

    <?php
    include './Views/partials/footer.php';
    ?>
   
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>