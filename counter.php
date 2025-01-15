<?php
// Percorso del file di contatore
$counterFile = "counter.txt";

// Verifica se il file esiste, altrimenti lo crea con valore iniziale
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Leggi il numero attuale di visitatori
$counter = (int)file_get_contents($counterFile);

// Incrementa il contatore
$counter++;

// Salva il nuovo valore nel file
file_put_contents($counterFile, $counter);

// Mostra il contatore sulla pagina
echo "<p>Numero di visitatori: " . $counter . "</p>";
?>
