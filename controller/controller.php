<?php
// recupera i dati dal DB (con require_once ci da un errore che con l'API non gestiamo più; include_once invece mi dice qualcosa di diverso, mi da un informazione leggermente modificata )
include_once __DIR__ . "/../database/db.php";
// var_dump($database);


// esponi la nostra API
// 1) informare il chiamante che stiamo per trasmettere un file json
// 2) tradurre in json i nostri dati e inserirle nella pagina
header('Content-type: application/json');
echo json_encode($database);
