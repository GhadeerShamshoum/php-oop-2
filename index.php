<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<?php
require_once __DIR__.'/classes/Hall.php';
require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Show.php';
require_once __DIR__.'/classes/Hall4D.php';

$movie =[new Film("Fantastic Beasts","Fantasy/Adventure","Eddie Reedmayne, Johnny Depp, Kattherine Waterston"),
        new Film("Harry Potter and the Chamber of Secrets","Fantasy/Adventure","Dan Radcliffe, Emma Watson, Rupert Grint"),
        new Film("Spider-Man: No Way Home","Action/Adventure","Tom Holland, Tobey Maguire, Zendaya")
]; 
var_dump($movie);
$halls =[new Hall("1","Mars","40" ),
        new Hall("2", "Venus","55"),
        new Hall("3", "Uranus","120"),
        new Hall("4","Saturn", "180"),
        new Hall4D("5","Jupiter","200", ["motion graphics, modeling, texturing"] )
];
var_dump($halls);
$shows =[new Show("10:00", "22.02.2022", $halls[0], $movie[0]),
         new Show("10:00", "22.02.2022", $halls[1], $movie[1]),
         new Show("10:00", "22.02.2022", $halls[2], $movie[2]),
         new Show("10:00", "22.02.2022", $halls[3], $movie[3])
];
var_dump($shows);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
</body>
</html>