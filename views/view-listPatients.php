<?php
require_once '../controllers/controller-listPatients.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Liste des Patients</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link href="../assets/style.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

   <div class="row">

      <div class="container border border-secondary shadow mt-5 p-4 col-4">

         <p class="h1 text-center mb-5"><i class="fas fa-hospital-user p-2"></i>Liste des patients</p>

         <form action="view-detailsPatient" method="GET">
            <table class="table table-sm table table-hover">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>

                  <?php foreach ($allPatientsArray as $patient) { ?>
                     <tr>
                        <td><?= $patient['id'] ?></td>
                        <td><?= $patient['lastname'] ?></td>
                        <td><?= $patient['firstname'] ?></td>
                        <td class="text-right">
                           <button type="submit" class="btn btn-outline-dark btn-sm" name="idPatient" value="<?= $patient['id'] ?>">+ infos</button>
                           <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                        </td>
                     </tr>
                  <?php } ?>

               </tbody>
            </table>
         </form>

         <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
         <?= count($allPatientsArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas de patients d\'enregistrés<p>' : '' ?>

      </div>

   </div>

   <div class="row justify-content-center">
      <!-- button retour accueil -->
      <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2" value="ok" name="addPatient">Accueil</a>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>