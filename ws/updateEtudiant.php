<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/EtudiantService.php';
    update();
}

function update() {
    extract($_POST);
    $es = new EtudiantService();
    $e = new Etudiant(intval($id), $nom, $prenom, $ville, $sexe , $photo);
    $es->update($e);
    
}

