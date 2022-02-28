<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->

<?php
require_once __DIR__.'/classes/Hall.php';
require_once __DIR__.'/classes/Film.php';

$cenima = new Hall("5");
$cenima-> film = new Film("Fantastic Beasts","Fantasy/Adventure","Eddie Reedmayne, Johnny Depp, Kattherine Waterston");
var_dump($cenima);
//     new Hall("Harry Potter and the Chamber of Secrets","Fantasy/Adventure","Dan Radcliffe, Emma Watson, Rupert Grint"),
//     new Hall("Spider-Man: No Way Home","Action/Adventure","Tom Holland, Tobey Maguire, Zendaya"),
// ];


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
    <ul>
        <?php
        foreach($cenima as $element){
            echo "<li>{$element-> getInfo()}</li>";
        }
       
        ?>
    </ul>
    
</body>
</html>