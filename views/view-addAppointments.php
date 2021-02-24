<?php
require_once '../controllers/controller-addAppointment.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="row">

        <div class="container border border-secondary shadow mt-5 p-4 col-6">

            <div class="text-center text-primary"><i class="fas fa-hospital-user p-2 logo"></i></div>
            <p class="text-center text-primary text-uppercase h3 mb-3">Enregistrement d'un rendez vous</p>

            <hr>

            <?php
            // Mise en place d'un include pour la mise en place du formulaire
            include 'include/form-addAppointments.php';
            ?>

        </div>

    </div>

    <div class="row justify-content-center">
        <!-- button retour accueil -->
        <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>