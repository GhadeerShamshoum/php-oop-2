<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->
<!-- 1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.



BONUS
5) gestire con logica un’eccezione try/catch in un punto qualsiasi del vostro codice.
6) Stabilito un film, una sala, un’ora di inizio e un numero di proiezioni, calcolare automaticamente gli orari degli spettacoli, considerando che tra uno spettacolo e l’altro devono passare 15 min.
7) Stabilito un giorno, recuperare l’elenco dei film in proiezione con relativi attori, i quali dovranno essere stampati con iniziale del nome e cognome “N. Cognome”. -->
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
new Film("Spider-Man: No Way Home","02h 28m","Action/Adventure",[ $actorsList[5], $actorsList[6], $actorsList[7]]),
new Film("Harry Potter and the Chamber of Secrets", "02h 32m","Fantasy/Adventure",[$actorsList[3], $actorsList[4], $actorsList[5]]),
new Film("Spider-Man: No Way Home","02h 28m","Action/Adventure",[ $actorsList[5], $actorsList[6], $actorsList[7]])
]; 



$shows =[new Show("10:00", "22.02.2022", $halls[0], $movie[0]),
         new Show("10:00", "22.02.2022", $halls[1], $movie[1]),
         new Show("10:00", "22.02.2022", $halls[2], $movie[2]),
         new Show("10:00", "22.02.2022", $halls[3], $movie[3]),
         new Show("10:00", "23.02.2022", $halls[0], $movie[0]),
         new Show("10:00", "23.02.2022", $halls[1], $movie[1]),
         new Show("10:00", "23.02.2022", $halls[2], $movie[2]),
         new Show("10:00", "23.02.2022", $halls[3], $movie[3]),
         new Show("12:00", "24.02.2022", $halls[0], $movie[0]),
         new Show("13:00", "24.02.2022", $halls[2], $movie[0]),
         new Show("14:00", "24.02.2022", $halls[1], $movie[1]),
         new Show("15:00", "24.02.2022", $halls[2], $movie[2]),
         new Show("16:00", "24.02.2022", $halls[3], $movie[3])
];
 var_dump($shows);

//2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
$total = null;
foreach ($halls as $element){
    $total += $element-> getNumberOFHalls();
}
 var_dump("capacity(total number)=$total");




//3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
$dateChoice = "24.02.2022";
$filmChoice = $movie[0]-> name;
$count=0;
foreach($shows as $element){
    if(($element->getData() == $dateChoice) && ($element->getFilm()-> name == $filmChoice)){
        $count++;
    } 
}
var_dump("number of shows 24-02-2022(fantastic beasts):$count");
    
//4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.
foreach($shows as $element){
    $start="";
    if(($element->getData() == $dateChoice) && $element->getTime() > $start ){
        $start=$element->getTime();
    } 
}

var_dump("last movie on".$element->getData());
var_dump("time:".$element->getTime());

// $indexLastShow=null;
// foreach($shows as $index=>$element){
//     $start="";
//     if(($element->getData() == $dateChoice) && $element->getTime() > $start ){
//         $start=$element->getTime();
//         $indexLastShow= $index;
//         echo $shows[$indexLastShow]->getTime()." + ".$shows[$indexLastShow]->getFilm()->duration;
//     } 
// }

// if (!is_null($indexLastShow)){
//     var_dump("last movie on".$element->getData());
//     var_dump("last movie on".$element->getTime());
// }
  

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