<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Regex Perso
$regexName = '/^[a-zA-Zéèê\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';

// mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$modifyPatientInBase = false;

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];

if($_POST['modifyPatientBtn']){
    $patientsObj = new Patients;
    $detailsPatientArray = $patientsObj->getDetailsPatient($_POST['modifyPatientBtn']);
}
