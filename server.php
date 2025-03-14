<?php

// se tutti i campi sono stati inviati, li prendo
if (isset($_POST['titolo']) && isset($_POST['cover']) && isset($_POST['artista']) && isset($_POST['genere']) && isset($_POST['anno']))  {
    $titolo = $_POST['titolo'];
        $cover = $_POST['cover'];
        $artista = $_POST['artista'];
        $genere = $_POST['genere'];
        $anno = $_POST['anno'];


// recupero i dati
$dischi = file_get_contents('./dischi.json');

// salvo la struttura in un array
$todos = json_decode($dischi, true);

// aggiungo il nuovo elemento all'array
$newTodo = [
    'cover' => $cover,
    'titolo' => $titolo,
    'artista' => $artista,
    'genere' => $genere,
    'anno' => $anno
];
$todos[] = $newTodo;

// converto l'array in json
$json_updated = json_encode($todos);

//scrivo il file con i nuovi dati
file_put_contents('./dischi.json', $json_updated);

//torno nell'index
header('Location: index.php'); 

} 

// se tutto questo sopra non funziona
else {

 echo "Uno o più campi sono vuoti";

}



?>