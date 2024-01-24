<?php $matches = [
    [
        'squadra_casa' => 'trentino',
        'squadra_ospite' => 'brescia',
        'punti_casa' => 78,
        'punti_ospiti' => 85
    ],
    [
        'squadra_casa' => 'pistoia',
        'squadra_ospite' => 'scafati',
        'punti_casa' => 78,
        'punti_ospiti' => 85
    ],
    [
        'squadra_casa' => 'brindisi',
        'squadra_ospite' => 'napoli',
        'punti_casa' => 78,
        'punti_ospiti' => 85
    ],
    [
        'squadra_casa' => 'varese',
        'squadra_ospite' => 'bologna',
        'punti_casa' => 78,
        'punti_ospiti' => 85
    ],
    [
        'squadra_casa' => 'tortona',
        'squadra_ospite' => 'venezia',
        'punti_casa' => 78,
        'punti_ospiti' => 85
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($matches as $match => $risultato_partita) {
                echo $risultato_partita['squadra_casa'] . " - " . $risultato_partita['squadra_ospite'] . " | " . $risultato_partita['punti_casa'] . "-" . $risultato_partita['punti_ospiti'];
                echo "<br>";
           } ?>
</body>
</html>