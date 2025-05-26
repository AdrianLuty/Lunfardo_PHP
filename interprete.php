<?php
/*
Implenentación desde bash.
php interprete.php ejemplo.lunf
*/

$acumulador = 0;

function interpretar($linea, &$acumulador) {
    $linea = trim($linea);

    if (preg_match('/^decime "(.*)"$/', $linea, $matches)) {
        echo $matches[1] . PHP_EOL;
    } elseif (preg_match('/^metele (\d+)$/', $linea, $matches)) {
        $acumulador += (int)$matches[1];
    } elseif (preg_match('/^sacale (\d+)$/', $linea, $matches)) {
        $acumulador -= (int)$matches[1];
    } elseif ($linea === "cuantohay") {
        echo "Hay $acumulador" . PHP_EOL;
    } elseif ($linea === "rajá") {
        echo "Listo loco, nos vimos." . PHP_EOL;
        exit;
    } elseif ($linea === "") {
        // Ignorar líneas vacías
    } else {
        echo "No te entiendo: $linea" . PHP_EOL;
    }
}

$archivo = $argv[1] ?? null;
if (!$archivo || !file_exists($archivo)) {
    echo "Pasame un archivo .lunf para interpretar." . PHP_EOL;
    exit(1);
}

$lineas = file($archivo);
foreach ($lineas as $linea) {
    interpretar($linea, $acumulador);
}
