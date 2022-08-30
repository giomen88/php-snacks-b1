<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
// punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [
    [
        'squadra_casa' => 'Virtus Bologna',
        'punteggio_sc' => '78',
        'squadra_ospite' => 'Reyer Venezia',
        'punteggio_so' => '57',
    ],
    [
        'squadra_casa' => 'Juvecaserta',
        'punteggio_sc' => '65',
        'squadra_ospite' => 'Virtus Roma',
        'punteggio_so' => '81',
    ],
    [
        'squadra_casa' => 'Auxilium Torino',
        'punteggio_sc' => '48',
        'squadra_ospite' => 'Petrarca',
        'punteggio_so' => '63',
    ],
    [
        'squadra_casa' => 'Napoli Basket',
        'punteggio_sc' => '90',
        'squadra_ospite' => 'Libertas Livorno',
        'punteggio_so' => '75',
    ],
];

var_dump($partite);

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
        <?php for($i = 0; $i < count($partite); $i++) : ?>
            <li> <?= "$partite[$i]['squadra_casa'] - $partite[$i]['squadra_ospite'] | $partite[$i]['punteggio_sc'] - $partite[$i]['punteggio_so']" ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
