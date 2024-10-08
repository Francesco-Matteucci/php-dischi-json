<?php
$jsonData = file_get_contents(__DIR__ . '/../db/dischi.json');

// Imposto l'intestazione per far restituire un JSON
header('Content-Type: application/json');

echo $jsonData;