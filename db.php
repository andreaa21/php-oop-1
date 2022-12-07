<?php




$OnceUpon = new Movie("Once upon a time in hollywood", "Quentin Tarantino", "2018");
$Wolf = new Movie("Wolf of Wall Street", "Martin Scorsese", "2013");
$Psycho = new Movie("American Psycho", "Mary Harron", "2000");
$Game = new Movie("The Imitation Game", "Morten Tyldum", "2014");
$Scarface = new Movie("Scarface", "Brian de Palma", "1984");
$Blues = new Movie("The Blues Brothers", "John Landis", "1980");



$OnceUpon->setImage("https://m.media-amazon.com/images/M/MV5BOTg4ZTNkZmUtMzNlZi00YmFjLTk1MmUtNWQwNTM0YjcyNTNkXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_FMjpg_UX1000_.jpg");
$Wolf->setImage("https://i.pinimg.com/originals/4c/9b/8b/4c9b8bcdbfbca5a1bd7d8e911497ed7a.jpg");
$Psycho->setImage("https://m.media-amazon.com/images/M/MV5BZTM2ZGJmNjQtN2UyOS00NjcxLWFjMDktMDE2NzMyNTZlZTBiXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg");
$Scarface->setImage("https://m.media-amazon.com/images/M/MV5BNjdjNGQ4NDEtNTEwYS00MTgxLTliYzQtYzE2ZDRiZjFhZmNlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_FMjpg_UX1000_.jpg");
$Blues->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe_DKnmdwB46REqJk073RyAY2MQOArJAssFw&usqp=CAU");


$MovieList = [$OnceUpon, $Wolf, $Psycho, $Game, $Scarface, $Blues];
