<?php
require_once '../controllers/controller-listAppointments.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LH Hospital</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link href="../assets/style.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

   <div class="row">

      <div class="container bg-light border border-secondary shadow mt-5 p-4 col-4">

         <div class="text-center text-secondary"><i class="far fa-calendar-alt p-2 logo"></i></div>
         <p class="text-center text-secondary text-uppercase mb-3 h3">Liste des rendez-vous</p>
         <div class="text-center mb-2"><span class="text-primary"><?= $messages['delete'] ?? '' ?></span></div>
            <div>
               <form action="view-detailsAppointment.php" method="GET">
                  <table class="table table-sm table table-hover">
                     <thead>
                        <tr class="table-secondary">
                           <th class="align-middle">Date</th>
                           <th class="align-middle">Heure</th>
                           <th class="align-middle">Patient</th>
                           <th class="align-middle"></th>
                        </tr>
                     </thead>
                     <tbody>

                        <?php foreach ($allAppointmentsArray as $appointment) { ?>
                           <tr>
                              <td class="align-middle"><?= $appointment['date'] ?></td>
                              <td class="align-middle"><?= $appointment['hour'] ?></td>
                              <td class="align-middle"><?= $appointment['patient'] ?></td>
                              <td class="align-middle text-center">
                                 <button type="submit" class="btn btn-outline-dark btn-sm" name="idAppointment" value="<?= $appointment['id'] ?>">+ détails</button>
                                 <!-- attention de bien respecter les balises data pour permettre de recupérer les valeurs en js -->
                                 <button type="button" class="btn btn-danger btn-sm deleteAppointment" data-bs-toggle="modal" data-bs-target="#deleteModal" data-del-id="<?= $appointment['id'] ?>" data-del-date="<?= $appointment['date'] ?>" data-del-hour="<?= $appointment['hour'] ?>" data-del-patient="<?= $appointment['patient'] ?>"><i class="far fa-trash-alt"></i></button>
                              </td>
                           </tr>
                        <?php } ?>

                     </tbody>
                  </table>
               </form>
               <!-- ------------------------------------- -->
               <!-- ICI NOTRE MODAL DE SUPPRESSION DE RDV -->
               <!-- ------------------------------------- -->
               <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Suppression d'un rendez-vous</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div id="modalBody" class="modal-body">
                           <div><span class="fw-bold">Patient : </span><span id="patientDeleteModal"></span></div>
                           <div><span class="fw-bold">Date : </span><span id="dateDeleteModal"></span></div>
                           <div><span class="fw-bold">Heure : </span><span id="hourDeleteModal"></span></div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                           <form action="" method="post">
                              <button id="deleteBtnModal" name="deleteBtn" type="submit" class="btn btn-danger">Supprimer</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ------------------------------------- -->
               <!-- ICI NOTRE MODAL DE SUPPRESSION DE RDV -->
               <!-- ------------------------------------- -->


               <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
               <?= count($allAppointmentsArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas de rendez-vous d\'enregistré<p>' : '' ?>

               <div class="text-center mt-4">
                  <a type="button" href="view-addAppointments.php" class="btn btn-sm btn-outline-secondary">Prendre un nouveau rendez-vous</a>
               </div>

            </div>

         </div>

         <div class="row justify-content-center">
            <!-- button retour accueil -->
            <a href="../index.php" class="btn btn-secondary mt-2 col-2"><i class="fas fa-home p-2"></i>Accueil</a>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

         <script>
            // on définit la constante regroupant tous nos boutons 
            const deleteButtons = document.querySelectorAll('.deleteAppointment');

            // nous ajoutons un écouteur d'événement sur chaque bouton à l'aide du foreach
            deleteButtons.forEach(element => {
               element.addEventListener('click', function() {
                  // Nous allons recupérer les valeurs via les datas inclus dans chaque bouton
                  // Nous modifions la valeur des span à l'aide de innerHTML
                  patientDeleteModal.innerHTML = element.dataset.delPatient;
                  dateDeleteModal.innerHTML = element.dataset.delDate;
                  hourDeleteModal.innerHTML = element.dataset.delHour;
                  // Nous attribuons la valeur de l'id du rdv pour supprimer le rdv
                  deleteBtnModal.value = element.dataset.delId;

               })
            });
         </script>

</body>

</html>