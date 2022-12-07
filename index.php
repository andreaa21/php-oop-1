<?php

include './class/Movie.php';
include 'db.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <link rel="stylesheet" href="css/style.css">
    <title>PHPmovies</title>
</head>

<body>

    <div class="container">
        <div class="row p-5 text-center d-flex flex-wrap justify-content-center">

            <?php foreach ($MovieList as $Movie) : ?>
                <div class="col-3 movie-card d-flex flex-column m-3 p-3 text-center justify-content-between">
                    <div class="card-image h-75">
                        <img src="<?php echo $Movie->img ?? "https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930" ?>" alt="<?php echo $Movie->title ?>">
                    </div>
                    <div class="card-text h-25 d-flex flex-column justify-content-around pt-4">
                        <span><strong><?php echo $Movie->title ?></strong></span>
                        <span><?php echo $Movie->director ?></span>
                        <span><?php echo $Movie->release_year ?></span>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>


</body>

</html>