<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';

// Creation d'un tableau contenant nos patients avec comme info : id, nom, prénom
$patientsObj = new Patients;

$message = [];

// on crée les variables page, limit et start pour définir la page sur laquelle nous nous trouvons, la limite de patients à afficher et à partir de quelle ligne.
$page = (!empty($_GET['page']) ? htmlspecialchars($_GET['page']) : 1); // on utilise une ternaire pour définir la valeur de page selon la présence du get
$limit = 4; // on souhaite afficher 4 patients par page
$start = ($page - 1) * $limit; // on définit la valeur de $start via un simple calcul


// nous allons compter le total de patients dans notre base, avec un intval pour être sure d'avoir un integer
$nbPatients = intval(count($patientsObj->getAllPatients()));
// on definit le nombre de page via la fonction ceil qui arrondit à l'entier supérieur
$pagesMax = ceil($nbPatients / $limit);

// $allPatientsArray = $patientsObj->getAllPatients();
$allPatientsArray = $patientsObj->getSomePatients($start, $limit);
