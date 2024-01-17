<?php

//TRACCIA 1

/*$persone = [

    ["nome" => "Alessio",
    "cognome" => "Giannoccaro",
    "genere" => "M"
],

["nome" => "Stella",
"cognome" => "Basile",
"genere" => "F"],

["nome" => "Robort",
"cognome" => "001",
"genere" => "NB"],

];

foreach ($persone as $utente) {
    if ($utente["genere"] == "M") {
        echo "Buongiorno Sig. " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    } elseif ($utente["genere"] == "F") {
        echo "Buongiorno Sig.ra " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    } else {
        echo "Buongiorno " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    }
}*/


//CON SWITCH
/*
$persone = [
    ["nome" => "Alessio", "cognome" => "Giannoccaro", "genere" => "M"],
    ["nome" => "Stella", "cognome" => "Basile", "genere" => "F"],
    ["nome" => "Robort", "cognome" => "001", "genere" => "NB"],
];

foreach ($persone as $utente) {
    $saluto = "Buongiorno ";

    switch ($utente["genere"]) {
        case "M":
            $saluto .= "Sig. ";
            break;
        case "F":
            $saluto .= "Sig.ra ";
            break;
        default:
            break;
    }

    $saluto .= $utente["nome"] . " " . $utente["cognome"] . "\n";
    echo $saluto;
}*/

//TRACCIA 2
/*
$numeri = [5, 8, 12, 7, 3, 10, 6, 15];

$sommaPari = 0;
$conteggioPari = 0;

// CONSIGLIO DEL MAESTRO PER CONCATENARE DEI NUMERI USARE IL FOREACH
foreach ($numeri as $numero) {
    // Verifica se il numero è pari utilizzando l'operatore modulo
    if ($numero % 2 == 0) {
        // Aggiornamento della somma e del conteggio dei numeri pari
        $sommaPari += $numero;
        $conteggioPari++;
    }
}

// Calcolo della media (se ci sono numeri pari)
if ($conteggioPari > 0) {
    $mediaPari = $sommaPari / $conteggioPari;
    echo "La media dei numeri pari è: " . $mediaPari . "\n";
} else {
    echo "Nessun numero pari presente nell'array.\n";
}*/

//TRACCIA 3
/*
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY "."\n";
    } elseif ($i % 3 == 0) {
        echo "PHP"."\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT "."\n";
    } else {
        echo $i . ' '."\n";
    }
}*/

//TRACCIA 4

/*

$temperatura = 10; // valore per il cambio di temperatura a libera scelta

if ($temperatura < 15) {
    echo "Fa freddo";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Fa caldo";
} else {
    echo "Fa molto caldo";
}

*/

//TRACCIA 5



$temperature = [
    "Venezia" => 16, 
    "Bari" => 32, 
    "Roma" => 28, 
    "Napoli" => 30, 
    "Milano" => 13, 
    "Palermo" => 14, 
    "Torino" => 24, 
    "Lecce" => 27, 
    "Genova" => 30,
    "Catania" => 11, 
    "Cosenza" => 9, 
];

foreach ($temperature as $citta => $temperatura) {
    if ($temperatura < 15) {
        $condizione = "fa freddo";
    } elseif ($temperatura >= 15 && $temperatura <= 25) {
        $condizione = "fa caldo";
    } else {
        $condizione = "fa molto caldo";
    }

    echo "A $citta $condizione con $temperatura °C\n";
}



//TRACCIA 6

/*

//Da studiare meglio

// Inizializza l'array esterno
$arrayEsterno = [];

// Ciclo esterno per popolare l'array esterno
for ($i = 0; $i < 4; $i++) {
    // Inizializza l'array interno
    $arrayInterno = [];

    // Ciclo interno per popolare l'array interno
    for ($j = 0; $j < 5; $j++) {
        // Genera un valore intero casuale tra 1 e 100
        $valoreCasuale = rand(1, 100);

        // Aggiungi il valore casuale all'array interno
        $arrayInterno[] = $valoreCasuale;
    }

    // Aggiungi l'array interno all'array esterno
    $arrayEsterno[] = $arrayInterno;
}

// Mostra la struttura dell'array con var_dump
var_dump($arrayEsterno);

*/














