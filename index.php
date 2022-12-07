<?php

include './class/Movie.php';



$OnceUpon = new Movie("Once upon a time in hollywood", "Quentin Tarantino", "2018");
$Wolf = new Movie("Wolf of Wall Street", "Martin Scorsese", "2013");

$OnceUpon->setImage("https://m.media-amazon.com/images/M/MV5BOTg4ZTNkZmUtMzNlZi00YmFjLTk1MmUtNWQwNTM0YjcyNTNkXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_FMjpg_UX1000_.jpg");
$Wolf->setImage("https://i.pinimg.com/originals/4c/9b/8b/4c9b8bcdbfbca5a1bd7d8e911497ed7a.jpg");

// var_dump($OnceUpon);
// var_dump($Wolf);


$MovieList = [$OnceUpon, $Wolf];

var_dump($MovieList);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>PHPmovies</title>
</head>

<body>



</body>

</html>