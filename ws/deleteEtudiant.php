<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/EtudiantService.php';
    delete();
}

function delete() {
    extract($_POST);
    $es = new EtudiantService();
    $es->delete($es->findById(intval($id)));
}


