<?php

require_once 'controllers/controller-index.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital LH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center border border-secondary p-5 my-5">
        <h1 class="text-danger text-center">LH HOSPITAL</h1>
        <h2 class="text-center">Patients</h2>
        <a class="btn btn-outline-primary fw-bold shadow w-50 m-2" href="views/view-addPatients.php"><i class="fas fa-user-plus"></i> AJOUTER PATIENTS</a>
        <a class="btn btn-outline-info fw-bold shadow w-50 m-2"><i class="far fa-address-book"></i> AFFICHER PATIENTS</a>
        <h2 class="text-center">Agenda</h2>
        <a class="btn btn-outline-dark fw-bold shadow w-50 m-2">AJOUTER RDV</a>
        <a class="btn btn-outline-secondary fw-bold shadow w-50 m-2">AFFICHER RDV</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>