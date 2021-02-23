<?php
session_start();

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Regex Perso
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$updatePatientInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [
    // 'test' => 'test'
];

// mise en place d'un tableau de messages
$messages = [];

// Nous testons si nous avons bien une valeur non NULL dans le $_POST ModifyPatient qui signifie que nous venons bien de la page detailsPatient
if (!empty($_POST['modifyPatient'])) {
    // Création d'un nouvel objet
    $patientsObj = new Patients;
    // Nous allons récupérer les informations de notre patient nous permettant de pré-remplir le formulaire
    $detailsPatientArray = $patientsObj->getDetailsPatient($_POST['modifyPatient']);

    // Pour plus de sécurité, je stocl l'id du patient à modifier dans une variable de session
    $_SESSION['idPatientToUpdate'] = $detailsPatientArray['id'];
    var_dump($_SESSION['idPatientToUpdate']);
}

if (isset($_POST['updatePatientBtn'])) {
    var_dump($_SESSION['idPatientToUpdate']);
    $updatePatientInBase = true;
}
