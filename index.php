<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<?php
require_once __DIR__.'/classes/Hall.php';
require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Show.php';
require_once __DIR__.'/classes/Hall4D.php';
require_once __DIR__.'/classes/Actor.php';

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
         new Show("10:00", "22.02.2022", $halls[3], $movie[3]),
         new Show("10:00", "23.02.2022", $halls[0], $movie[0]),
         new Show("10:00", "23.02.2022", $halls[1], $movie[1]),
         new Show("10:00", "23.02.2022", $halls[2], $movie[2]),
         new Show("10:00", "23.02.2022", $halls[3], $movie[3]),
         new Show("10:00", "24.02.2022", $halls[0], $movie[0]),
         new Show("10:00", "24.02.2022", $halls[1], $movie[1]),
         new Show("10:00", "24.02.2022", $halls[2], $movie[2]),
         new Show("10:00", "24.02.2022", $halls[3], $movie[3])
];
var_dump($shows);
$actorsList= [
    new Actor("Eddie", "Redmayne",1982),
    new Actor("Johnny", "Depp",1963),
    new Actor("Katherine", "Waterston",1980),
    new Actor("Dan", "Radcliffe",1989),
    new Actor("Emma", "Watson",1990),
    new Actor("Rupert", "Grint",1988),
    new Actor("Tom", "Holland",1996),
    new Actor("Tobey", "Maguire",1975),
    new Actor("Zendaya", "Maree",1996),

];


$movie =[new Film("Fantastic Beasts","2h 14m","Fantasy/Adventure",[ $actorsList[0], $actorsList[1], $actorsList[2]]),
        new Film("Harry Potter and the Chamber of Secrets", "02h 32m","Fantasy/Adventure",[$actorsList[3], $actorsList[4], $actorsList[5]]),
        new Film("Spider-Man: No Way Home","02h 28m","Action/Adventure",[ $actorsList[5], $actorsList[6], $actorsList[7]])
]; 
var_dump($movie, $actorsList);

$total = null;
foreach ($halls as $element){
    $total += $element-> getNumberOFHalls();
}
    
    var_dump("capacity(total number)=$total");









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