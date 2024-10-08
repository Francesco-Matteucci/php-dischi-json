<?php

session_start();

$jsonFilePath = __DIR__ . '/../db/dischi.json';

// Leggo i dischi dal file JSON e li memorizzo nella sessione, durante il primo accesso
if (!isset($_SESSION['albums'])) {
    $jsonData = file_get_contents($jsonFilePath);
    $_SESSION['albums'] = json_decode($jsonData, true);
}

// Se la richiesta è post, aggiungo un nuovo album
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Creo il nuovo album dall'input dell'utente
    $newAlbum = [
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "year" => $_POST['year'],
        "genre" => $_POST['genre'],
        "poster" => $_POST['poster']
    ];

    // Aggiungo il nuovo album alla sessione
    $_SESSION['albums'][] = $newAlbum;

    // Reindirizzo alla pagina principale
    header('Location: ../index.html');
} else {
    // Restituisco tutti i dischi memorizzati nella sessione
    header('Content-Type: application/json');
    echo json_encode($_SESSION['albums']);
}