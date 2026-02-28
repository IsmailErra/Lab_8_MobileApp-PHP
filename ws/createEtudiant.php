<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/EtudiantService.php';
    include_once '../classes/Etudiant.php';

    extract($_POST);

    $es = new EtudiantService();
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe));

    header('Content-Type: application/json');
    echo json_encode($es->findAll()); // FIXED HERE
}
?>