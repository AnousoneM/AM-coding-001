<?php
require_once '../controllers/controller-addPatients.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

    <div class="row">

        <div class="container border border-secondary shadow p-4 col-4">

            <form novalidate action="" method="POST">
                <!-- Nom -->
                <div class="text-left">
                    <label class="label" for="lastname">Nom</label>
                    <span class="error">Mauvais format</span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" required>
                </div>

                <!-- Prénom -->
                <div class="text-left">
                    <label class="label" for="firstname">Prénom</label>
                    <span class="error"></span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="ex. John" required>
                </div>

                <!-- Date de naissance  -->
                <div class="text-left">
                    <label class="label" for="birthdate">Date de naissance</label>
                    <span class="error"></span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="birthdate" name="birthdate" type="date" class="form-control">
                </div>

                <!-- Numéro de téléphone -->
                <div class="text-left">
                    <label class="label" for="phone">Numéro de téléphone</label>
                    <span class="error"></span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="phone" name="phone" type="text" class="form-control" placeholder="ex. 0612XXXXXX" required>
                </div>

                <!-- Adresse mail -->
                <div class="text-left">
                    <label class="label" for="mail">Adresse mail</label>
                    <span class="error"></span>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input id="mail" name="mail" type="mail" class="form-control" placeholder="ex. mail@mail.fr" required>
                </div>

                <button type="submit" class="btn btn-outline-primary" value="ok" name="addPatient">+ Enregistrer</button>

            </form>

        </div>

    </div>

    <div class="row justify-content-center">
        <!-- button retour accueil -->
        <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2" value="ok" name="addPatient">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>